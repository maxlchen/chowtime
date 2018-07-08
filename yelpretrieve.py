import get_key
from yelpapi import YelpAPI

api = get_key.get_key

yelp_api = YelpAPI(api)

def getResults():
    return yelp_api.search_query(term = "food", location = 'Syosset', limit = 50)
