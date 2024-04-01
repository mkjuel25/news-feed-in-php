**Demo ** Follow the search bar below
[OwnTweet](https://search.owntweet.com/)


The provided code snippet is written in PHP and displays the latest news headlines from the BBC World News RSS feed. Here's a breakdown of what the code does for a GitHub readme content:

**1. Setting Up:**

- Defines the URL of the BBC World News RSS feed (`$feed_url`).
- Sets the maximum number of news items to display (`$max_items`). This can be changed to control how many headlines appear.

**2. Loading the Feed:**

- Uses `simplexml_load_file` function to load the RSS feed content into an XML object (`$xml`).
- Checks if the feed loaded successfully. If not, it displays an error message.

**3. Looping Through News Items:**

- Iterates through each news item (`item`) in the RSS feed using a `foreach` loop.
- Limits the loop to the specified `$max_items`.

**4. Building the Readme Content:**

  - For each item, it creates a HTML element with the class `news-item`.
    - Creates a headline with a link to the news article (`<h4><a>...</a></h4>`).
    - Displays a short description of the news (`<p>...</p>`).
    - Extracts the domain name from the news link and displays it as a link (`<a>...</a>`).
    - Calculates the time difference between the news publication date and the current time.
    - Formats the time difference into a user-friendly format (e.g., "Just now", "2 hrs ago").
    - Displays the publication date with the formatted time difference (`<div class='post-time'>...</div>`).

**Overall**, this code snippet creates a dynamic and informative section within your GitHub readme file that showcases the latest headlines from BBC World News. 
