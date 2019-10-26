#!/usr/bin/env python

import sys
import time
import requests
import json
from envirophat import light, weather, motion, analog

unit = 'hPa'  # Pressure unit, can be either hPa (hectopascals) or Pa (pascals)

url = 'http://192.168.1.5/api/sensors/'
headers = {'content-type': 'application/json'}

while True:
 payload = {
  'temperature': weather.temperature(),
  'pressure': weather.pressure(unit=unit),
  'altitude': weather.altitude(),
  'light': light.light(),
  'light_rgb': light.rgb(),
  }
 data=json.dumps(payload)
 print(data)
 response = requests.post(url, data=data, headers=headers)
 print(response)
 time.sleep(5)