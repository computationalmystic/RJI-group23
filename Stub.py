def upload(file):
#file: a string containing a directory name/file path

#exception handling for incompatible file, corrupted file, incomplete upload, etc
#returns success message

def change_dir(file, dir):
#file: a string containing a file name
#dir: a string containing the name of the destination directory     
#needs to alter file path in database

def manage(sort):
#sort: different methods of sorting (i.e. by ranking, file name, etc)

def delete(file):
#removes file from database and server

def assessment(file):
#file: file to be assessed by Idealo
#returns a .json file (ranking)

def log_in(user_name,pwd):
#allows user to log in to system
#
#user_name: an array with a maximum of eight characters
#pwd: an array
#
#returns to a page, either the database for a successful login or an error message for an 
#unsuccessful login

def log_out():
#return to home page without being logged in 
#will likely be a button

