from yelp.client import Client
from yelp.oauth1_authenticator import Oauth1Authenticator

from yelpapi import YelpAPI
yelp_api = YelpAPI('V4emNeDA9c8hV2hv1dRCs33iS3QmfQjlpPSvd5LQ8AInkJXwh_VXl-cWAhT6TsjdNwovdI0qvXyi5_gqv5nw4TEQRkC_ZMKHI7_YCEnlm7cnQ2KpmlMpzmOBHDNBW3Yx')
search_results = yelp_api.search_query(term = "food", location = 'Syosset')
print(search_results)