import pymongo
from pymongo import MongoClient
from flask import Flask
from flask import Flask, url_for,jsonify
from flask import request
import json
from flask_cors import CORS
import datetime
app = Flask(__name__)
CORS(app)

from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer
analyser = SentimentIntensityAnalyzer()
def sentiment_analyzer_scores(sentence):
    score = analyser.polarity_scores(sentence)
    return score

cluster = MongoClient("mongodb://dinesh_bhuttu:Dinesh123@cluster0-shard-00-00-qwwij.mongodb.net:27017,cluster0-shard-00-01-qwwij.mongodb.net:27017,cluster0-shard-00-02-qwwij.mongodb.net:27017/test?ssl=true&replicaSet=Cluster0-shard-0&authSource=admin&retryWrites=true&w=majority")
db = cluster["100Marks"]
metadata_collection = db["Course_metadata"]
course_collection = db["Course"]
image_collection = db["ImageCollection"]

course_ids =[]

for x in metadata_collection.find():
    course_ids.append(x["_id"])
    
#print(course_ids)
courses_ratings=[]

for i in course_ids:
    myquery = { "_id": i }
    mydoc = metadata_collection.find(myquery)
    ratings = mydoc[0]["rating"]
    temp =(i,ratings)
    courses_ratings.append(temp)
    

sorted_courses_ratings = sorted(courses_ratings, key=lambda x: x[1], reverse=True)
#print(sorted_courses_ratings)


sorted_courses = []

for i in sorted_courses_ratings:
    sorted_courses.append(i[0])
    
    
coursenames_toid =[]
for i in course_ids:
    myquery = { "_id": i }
    mydoc = metadata_collection.find(myquery)
    course_name = mydoc[0]["course_name"]
    temp = (course_name, i)
    coursenames_toid.append(temp)
    



@app.route('/getTopn')
def hello():
    n = int(request.args.get('n'))
    top_ncourses = sorted_courses[:n]
    
    courses_desc=[]
    course_rating=[]
    course_names=[]
    logo=[]
    for i in top_ncourses:
        myquery = { "_id": i }
        mydoc = metadata_collection.find(myquery)
        ratings = mydoc[0]["rating"]
        courses_desc.append(mydoc[0]['course_description'])
        course_rating.append(mydoc[0]['rating'])
        course_names.append(mydoc[0]['course_name'])
        
        
    ret = {"course_names":course_names, "course_description":courses_desc, "rating":course_rating}
    
    return ret


@app.route('/subm_throt')
def subm():
    term = request.args.get('term')
    related_course_id=[]
    related_course_name=[]
    for i in coursenames_toid:
        if(term.lower() in i[0].lower()):
            related_course_id.append(i[1])
            related_course_name.append(i[0])
    ret = {"course_id":related_course_id, "course_name":related_course_name}
    return ret

@app.route('/analyze')
def analyze():
    term = request.args.get('sent')
    term = str(term)
    ret = sentiment_analyzer_scores(term)
    return ret 


@app.route('/getcoursemetadata')
def getcoursemetadata():
    id1 = request.args.get('id')
    mydoc = metadata_collection.find({"_id":id1})
    mydoc1 = image_collection.find({"_id":id1})
    res = {
        "course_name":mydoc[0]["course_name"],
        "course_description":mydoc[0]["course_description"],
        "logo":mydoc1[0]["logo"],
        "part1":mydoc[0]["part1"],
        "part2":mydoc[0]["part2"],
        "part3":mydoc[0]["part3"],
        "part4":mydoc[0]["part4"]
    }
    return res

@app.route('/getlinevalues')
def getlinevalues():
    term = request.args.get('id')

    myquery = { "_id": term }
    mydoc = metadata_collection.find(myquery)
    reviews_list = mydoc[0]["reviews"]

    reviews=[]
    for i in reviews_list:
        time=i["timestamp"]
        pos =i["pos"]
        neg = i["neg"]
        temp =(time,pos,neg)
        reviews.append(temp)
    sorted_reviews = sorted(reviews, key=lambda x: x[0])
    ret = {"reviews":sorted_reviews}
    return ret
    

@app.route('/getcoursewithoutimages')
def getcoursewithoutimages():
    id1 = request.args.get('id')
    week1 = request.args.get('week')
    mydoc = course_collection.find({"_id":id1})
    print("id=",id1)
    print("week=",week1)
    return mydoc[0]["part"+week1]


@app.route('/getcourseimages')
def getcourseimages():
    id1 = request.args.get('id')
    week1 = request.args.get('week')
    mydoc = image_collection.find({"_id":id1})
    #print(mydoc[0])
    return jsonify(result=mydoc[0]["part"+week1])


@app.route('/getcoursereviews')
def getcoursereviews():
    id1 = request.args.get('id')
    myquery = { "_id": id1 }
    mydoc = metadata_collection.find(myquery)
    reviews_list = mydoc[0]["reviews"]
    reviews=[]
    for i in reviews_list:
        time=i["timestamp"]
        pos =i["pos"]
        neg = i["neg"]
        re = i["message"]
        
        reviews.append(re)
   
    ret = {"reviews":reviews}
    return ret


@app.route('/updatecoursereviews')
def updatecoursereviews():
    username = request.args.get('name')
    uid = request.args.get('id')
    message =  request.args.get('msg')
    pos = float(request.args.get('pos'))
    neg = float(request.args.get('neg'))
    neu = float(request.args.get('neu'))
    rating = int(request.args.get('rating'))

    ar = {"username":username,"timestamp":datetime.datetime.now(),"message":message,"pos":pos,  "neg":neg,  "neu":neu}
                                 
    metadata_collection.update( { "_id" : uid},{ "$push": { "reviews": ar } });
    
    myquery = { "_id": uid }
    newvalues = { "$set": { "rating": rating } }

    metadata_collection.update_one(myquery, newvalues)
    
    return jsonify("success")
    


if __name__ == '__main__':
    app.run(port=5000, host="127.0.0.1")