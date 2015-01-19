import facebook # pip install facebook-sdk
import json

ACCESS_TOKEN = 'CAACEdEose0cBAOgY05I9ZBTcDKZCE1mH0OinsChwlc1djZAZCaoF7RvF9SmpkmZAD2lY9qSIYAQ1uR1HxUPBAcOfJLxbLohISGe2qCiMdwzjVn2Y36TnOO5vX0LrU7LdQpKsHpeYAK8ZBEALKQJcxVvymcZB4snSnv0XfpIKgfCdC8tGgYzPEHXzthnQnP8ZCyOEZA077kmvuZBKHDXOXLxdpN7sZBP9lzV82kZD'

# A helper function to pretty-print Python objects as JSON

def pp(o): 
    print json.dumps(o, indent=1)

# Create a connection to the Graph API with your access token

g = facebook.GraphAPI(ACCESS_TOKEN)

# Execute a few sample queries

print '---------------'
print 'Me'
print '---------------'
pp(g.get_object('me'))
print
print '---------------'
print 'My Friends'
print '---------------'
pp(g.get_connections('me', 'friends'))
print
print '---------------'
print 'Social Web'
print '---------------'
pp(g.request("search", {'q' : 'social web', 'type' : 'page'}))