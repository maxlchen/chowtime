import random
from yelpretrieve import getResults
import sys

location = sys.argv[1]
search_results = getResults(location)

def chooseRestaurant():
	return search_results['businesses'][random.randint(0,len(search_results['businesses']))]['name']

print(chooseRestaurant())