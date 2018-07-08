import random
from yelpretrieve import getResults

search_results = getResults()

def chooseRestaurant():
	return search_results['businesses'][random.randint(0,len(search_results['businesses']))]['name']

print(chooseRestaurant())