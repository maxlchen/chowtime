#import get_key
from yelpapi import YelpAPI
import chooserestaurant

#api = get_key.get_key

yelp_api = YelpAPI('V4emNeDA9c8hV2hv1dRCs33iS3QmfQjlpPSvd5LQ8AInkJXwh_VXl-cWAhT6TsjdNwovdI0qvXyi5_gqv5nw4TEQRkC_ZMKHI7_YCEnlm7cnQ2KpmlMpzmOBHDNBW3Yx')

def getResults(area, category, distance, cost = "1, 2, 3, 4"):
    return yelp_api.search_query(term = "food", categories = category, radius = distance, location = area, price = cost, limit = 50)

