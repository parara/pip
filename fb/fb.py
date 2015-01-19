import requests # pip install requests
import json

base_url = 'https://graph.facebook.com/me'

ACCESS_TOKEN = 'CAACEdEose0cBAI1sXZCxpS1z54HWVwKKveqLzN7JOZBEz7sOQ6x556ZBZCxkqu1q7qZA8d9boiPrxYcoQPWldkZBQRbsAW0QGv0U8BU65pe1V5IVnqTEVWlBaCfGlRlCyhf0ZCQGKYpb0bBMCUVXo7MNSsiZBPXhuZAXlahSZCw2XkRND8AKHidwVUci40enZB44oXhSCQ9ZC7u8ScBYZCMtjlJZCYOiqPZAkb8Qk4ZD'

# Get 10 likes for 10 friends
fields = 'id,name,friends.limit(10).fields(likes.limit(10))'

url = '%s?fields=%s&access_token=%s' % \
    (base_url, fields, ACCESS_TOKEN,)

# This API is HTTP-based and could be requested in the browser,
# with a command line utlity like curl, or using just about
# any programming language by making a request to the URL.
# Click the hyperlink that appears in your notebook output
# when you execute this code cell to see for yourself...
print url

# Interpret the response as JSON and convert back
# to Python data structures
content = requests.get(url).json()

# Pretty-print the JSON and display it
print json.dumps(content, indent=1)