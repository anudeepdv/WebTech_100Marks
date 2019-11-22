import pymongo
from pymongo import MongoClient
import datetime


cluster = MongoClient("mongodb://dinesh_bhuttu:Dinesh123@cluster0-shard-00-00-qwwij.mongodb.net:27017,cluster0-shard-00-01-qwwij.mongodb.net:27017,cluster0-shard-00-02-qwwij.mongodb.net:27017/test?ssl=true&replicaSet=Cluster0-shard-0&authSource=admin&retryWrites=true&w=majority")
db = cluster["100Marks"]
metadata_collection = db["Course_metadata"]
course_collection = db["Course"]
image_collection = db["ImageCollection"]

myquery = { "_id": "ML001" }
newvalues = { "$set": { "rating": 9 } }

metadata_collection.update_one(myquery, newvalues)