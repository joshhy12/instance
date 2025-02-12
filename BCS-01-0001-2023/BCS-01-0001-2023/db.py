from flask import Flask
import mysql.connector

app = Flask(__name__)


# MySQL database connection
db = mysql.connector.connect(
    host = "localhost",
    user = "root",
    password = "",
    database = "user_registration"
)

cursor = db.cursor()