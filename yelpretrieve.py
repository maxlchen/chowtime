import get_key
from yelpapi import YelpAPI

api = get_key.get_key

yelp_api = YelpAPI(api)

def getResults(area, category, distance, cost = "1, 2, 3, 4"):
    return yelp_api.search_query(term = "food", categories = category, radius = distance, location = area, price = cost, limit = 50)
