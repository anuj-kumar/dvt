# DVT
Data Visualizer for Twitter

*Installation instructions:*
1. Clone the repo into your web directory using the following command:
          git clone https://github.com/anuj-kumar/dvt.git
2. Modify the dvt/tweetServer/config.php for twitter API credentials and initialization of variables.
3. Open it in the browser, by typing the path after localhost or 127.0.0.1 e.g (http://localhost/dvt/)
4. The page should be asking for location permissions as it is loaded.

*How the application works:*
1. Using the JS navigator.location, the user is prompted to share the location by the browser.
2. As the user allow access to the location, the coordinates are passed to the Google Maps API and the map is loaded, zoomed at the current location of the user.
3. Using the coordinates of the user, a GET request is sent to the local server, which in turn hits the Twitter Search API and fetches the tweets within a given radius. This is done after every 30 seconds.
4. The fetched queues are pushed into a Queue. Last ten elements of the Queue are popped out if the the Queue grows bigger than a threshold.
5. Using the information with the fetched tweets, markers are set on the map, hovering which the text of the tweet is displayed. More information of the tweet can be easily added here, but I kept the text only for simplicity.

