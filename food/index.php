<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feed the need</title>
  <link rel="stylesheet" href="./styles2.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
<?php include 'header.php'; ?>
  <div class="food-img">
    <div class="container">
      <div class="box">
        <div class="imgBx">
          <img src="https://cdn.downtoearth.org.in/library/large/2022-05-20/0.78372600_1653021524_istock-619643870.jpg">
        </div>
        <div class="content">
          <div>
            <h2>Starvation</h2>
            <p>Approximately 189.2 million people in India are undernourished, according to the Food and Agriculture
              Organization's (FAO) 2023 report.</p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img src="https://media.licdn.com/dms/image/D5612AQFZCg6Ux7bOXQ/article-cover_image-shrink_720_1280/0/1687499293421?e=2147483647&v=beta&t=lQMxpVF13zdtTzKr67qJ5bOT1V96anMe_2TBDRlvp8o">
        </div>
        <div class="content">
          <div>
            <h2>Food Wastage</h2>
            <p>India wastes around 67 million tonnes of food annually, worth approximately ₹92,000 crores (about $12
              billion USD), according to a 2021 report.</p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img src="https://curioustimes.in/wp-content/uploads/2023/10/Global-Hunger-Index-Shows-Indias-Challenges.jpg">
        </div>
        <div class="content">
          <div>
            <h2>Global Hunger Index</h2>
            <p>The Global Hunger Index 2023 ranks India 107th out of 121 countries, indicating a serious level of hunger
            </p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img
            src="https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2019/06/08/Pictures/_87edbc70-8952-11e9-ab40-33c30d629efb.png">
        </div>
        <div class="content">
          <div>
            <h2>Deaths due to starvation</h2>
            <p>More than 7000 Indians die per day due to hunger. As per the reports concluded from the recent data, 25
              lakh Indians die every year because of hunger.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <center>
    <div style="border-bottom: 3px solid green; width: fit-content; height: fit-content;">
      <h1>Welcome to <span>Feed</span> the Need!!</h1>
    </div>
  </center>
  <br>
  <div class="mission">
    <section class="mission-statement">
      <div class="container">
        <h1>Our Mission</h1>
        <p>From Tables to Hearts:
        Our mission is to collect and distribute surplus food from restaurants and mess halls to the needy, promoting sustainability and compassion, one meal at a time.<br>"Turning restaurant leftovers into feel-good meals. Because why throw it away when you can give it away?"</p>
      </div>
    </section>
  </div>
  <br>
  <div class="statis">
    <section class="did-you-know">
      <div class="container22">
        <h1 class="didu">Did You Know?</h1>
        <div class="stats">
          <div class="stat">
            <h2>Deaths Due to Starvation in India</h2>
            <canvas id="starvationChart"></canvas>
            <p class="interactive">Hover over the chart for details</p>
          </div>
          <div class="stat">
            <h2>Food Wastage in India</h2>
            <canvas id="wastageChart"></canvas>
            <p class="interactive">Hover over the chart for details</p>
          </div>
          <div class="stat">
            <h2>Global Hunger Index Ranking</h2>
            <canvas id="hungerIndexChart"></canvas>
            <p class="interactive">Hover over the chart for details</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="blogis">
  <section class="blog-news">
        <div class="container">
            <h2>Latest News & Articles</h2>
            <div class="blog-grid">
                <div class="blog-post">
                    <img src="https://i.ytimg.com/vi/4tD3weDFO5c/maxresdefault.jpg" alt="Blog Image 1">
                    <div class="post-content">
                        <h3>Feeding Hope: How Our Community Is Combating Hunger</h3>
                        <p>In this post, we delve into the inspiring stories of local heroes who are making a difference in the fight against hunger. From grassroots initiatives to large-scale food drives, discover how communities are coming together to ensure no one goes hungry. Learn about the innovative solutions being implemented and how you can get involved to support these vital efforts.</p>
                        <button onclick="window.location.href='#'">Read More</button>
                    </div>
                </div>
                <div class="blog-post">
                    <img src="https://www.tamborasi.com/wp-content/uploads/2020/11/zero-waste-tips-and-swaps.jpeg" alt="Blog Image 2">
                    <div class="post-content">
                        <h3>Sustainable Solutions: Reducing Food Waste and Feeding the Hungry</h3>
                        <p>Explore the growing movement towards sustainability in food distribution. This article highlights the various strategies and technologies being used to reduce food waste while simultaneously feeding those in need. From farm to table, see how every step of the food supply chain can play a role in creating a more sustainable future.</p>
                        <button onclick="window.location.href='#'">Read More</button>
                    </div>
                </div>
                <div class="blog-post">
                    <img src="https://i0.wp.com/thetaste.ie/wp/wp-content/uploads/2018/11/the-future-of-food-e1543251554860.png?resize=650%2C340" alt="Blog Image 3">
                    <div class="post-content">
                        <h3>The Future of Food Donation: Trends and Innovations</h3>
                        <p>Stay ahead with the latest trends and innovations in the field of food donation. This post explores cutting-edge technologies and methodologies that are shaping the future of food distribution. From advanced logistics to AI-driven matching of food surplus with needs, see how innovation is paving the way for more efficient and impactful food donation systems.</p>
                        <button onclick="window.location.href='#'">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  <?php include 'footer.php'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const missionStatement = document.querySelector(".mission-statement");
      missionStatement.classList.add("animate");
    });
  </script>
  <script src="script.js"></script>
</body>

</html>