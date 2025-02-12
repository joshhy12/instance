from flask import Flask, request, jsonify, render_template, send_from_directory
from db import db, cursor # Import database connection
import bcrypt
import mysql.connector

app = Flask(__name__, template_folder=".")

@app.route('/')
def home():
    return render_template("index.html")
@app.route('/<path:filename>')
def static_files(filename):
    return send_from_directory('.', filename)
@app.route('/users')
def users():
    cursor.execute("SELECT * FROM users")
    users_list = cursor.fetchall()
    return render_template("users.html", users=users_list)

@app.route('/register', methods=['POST'])
def register_user():
    data = request.json
    full_name = data['full_name']
    reg_number = data['reg_number']
    sex = data['sex']
    email = data['email']
    region = data['region']
    district = data['district']
    password = bcrypt.hashpw(data['passwword'].encode('utf-8'), bcrypt.gensalt())

    try:
        cursor.execute("""
                       INSERT INTO users (full_name, reg_number, sex, email, region, district, password)
                       VALUES (%s, %s, %s, %s, %s, %s, %s)
                       """, (full_name, reg_number, sex, email, region, district, password))
        db.commit()
        return jsonify({"message": "Registration successfull!"}), 201
    except mysql.connector.Error as err:
        return jsonify({"error": str(err)}), 400
if __name__ == '__main__':
    app.run(debug=True)