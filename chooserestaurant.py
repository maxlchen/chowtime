import random
from yelpretrieve import getResults
import sys

location = sys.argv[1]
price = str(sys.argv[2])
category = str(sys.argv[3])
distance = int(sys.argv[4]) * 1600

if(price == '0'):
	search_results = getResults(location, category, distance)
else:
	search_results = getResults(location, category, distance, price)

def chooseRestaurant():
	if len(search_results['businesses']) == 0:
		print("No restaurants for this criteria. Please click here to try a new search.")
		print('')
		print('')
		print('http://intellegostudio.com/chowtime/index.php')
		print('http://intellegostudio.com/chowtime/images/notfound.jpg')
	else:
		restaurant = search_results['businesses'][random.randint(0,len(search_results['businesses']) - 1)]
		print(restaurant['name'])#, restaurant['id'])
		print(restaurant['id'])
		print(restaurant['location']['address1'] + ", " + restaurant['location']['city'] + ", " + restaurant['location']['zip_code'])
		print(restaurant['url'])
		print(restaurant['image_url'])

chooseRestaurant()