import requests
userdata = {"firstname": "John", "lastname": "Doe", "password": "jdoe123"}
resp = requests.post('localhost/parking/new.php', params=userdata)
