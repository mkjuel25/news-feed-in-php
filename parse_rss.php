<?php

$feed_url = "https://feeds.bbci.co.uk/news/world/rss.xml";
$max_items = 15; // Change this to control the number of displayed items

$xml = simplexml_load_file($feed_url);

if (!$xml) {
  echo "Error: Unable to load RSS feed";
  return;
}

$i = 0;
foreach ($xml->channel->item as $item) {
  if ($i >= $max_items) {
    break;
  }

  echo "<div class='news-item'>";
  echo "<h4><a href='" . $item->link . "'>" . $item->title ."</a></h4>";
  echo "<p>" . $item->description . "</p>";

  // Get the domain from the link
  $link_parts = parse_url($item->link);
  $domain = $link_parts['host'];

  // Display the domain as a link
  echo "Read on: <a href='" . $item->link . "'>" . $domain . "</a>";

  // Get the publish date and format it
  $pubDate = strtotime($item->pubDate);
  $currentTime = time();
  $timeDiff = $currentTime - $pubDate;

  if ($timeDiff < 60) { // Less than a minute
      $timeAgo = "Just now";
  } elseif ($timeDiff < 3600) { // Less than an hour
      $mins = floor($timeDiff / 60);
      $timeAgo = $mins . " min ago";
  } elseif ($timeDiff < 86400) { // Less than a day
      $hrs = floor($timeDiff / 3600);
      $timeAgo = $hrs . " hrs ago";
  } else { // More than a day
      $days = floor($timeDiff / 86400);
      $timeAgo = $days . " days ago";
  }

  echo "<div class='post-time'>Published: " . $timeAgo . "</div>";

  echo "</div>";

  $i++;
}

?>

