import json
import random

file = open('data.json')
data = json.load(file)

introduction = random.choice(data['introductions'])
who = random.choice(data['who'])
how = random.choice(data['how'])
what = random.choice(data['what'])
why = random.choice(data['why'])
culmination = random.choice(data['culminations'])

print(introduction + who + how + what + why + culmination)

file.close()
