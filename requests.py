'''
requests also provides sessions object manipulation or workfow
'''
import requests

request = requests.get('http://httpbin.org')

print(request) # returns response object

# You can check the object by
# 1 - request.status_code
# 2 - request.ok
# Example below

if request.status_code is 200:
    print('successful')

if request.ok:
    print('request sent successfully')

print(request.headers) # will return the header of request object
#for the header part, it will return a lot of values, to get certain values from the object, call the
#specific string like this
request.headers['Content-Length']
#this will return the length of headers

#to view all the content
request.text
request.content #same thing
#to get json text only
request.json()

#you can do something like
timeline = request.json()
#you can access the values like such
timeline[0]['id']

###################### POST REQUEST #########################
import requests

payload = {'Content': "I really like requests", 'user_id': 157} # payloads/data_to_send are usually dictionaries

#send the payload to a url
post_request = requests.post('http://httpbin.org/post', params=payload)
post_request.headers#returns the headers
post_request.content#content would be in json so you can do it like
post_request.json()#much better
###################### DELETE REQUEST #######################
import requests
payload = {'posts[]': [123, 456]}
r = requests.delete('http://httpbin.org/delete', params=payload)
r.json()
r.headers()# to check if we get the request back
###################### HTTP REQUEST_AUTH ####################
import requests
from requests import HTTPBasicAuth, HTTPDigestAuth

r = requests.get('URL_THAT_REQUIRES_AUTH', auth=HTTPBasicAuth('user', 'password'))
#now for the DigestAuth
r = requests.get('URL_THAT_REQUIRES_AUTH', auth=HTTPDigestAuth('user', 'password'))
