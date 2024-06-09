<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed the Need</title>
    <link rel="stylesheet" href="faq.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="question">
        <div class="faq-container">
            <h1>Frequently Asked Questions</h1>
            <div class="faq">
                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> What is the purpose of this food donation
                        organization?</h2>
                    <div class="faq-answer">
                        <p>Our mission is to collect leftover food from restaurants and mess owners and donate it to
                            those in need, helping to reduce food waste and hunger.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> How do you ensure the food is safe to eat?</h2>
                    <div class="faq-answer">
                        <p>We follow strict safety protocols, including proper food handling, storage, and
                            transportation procedures to ensure all donated food is safe for consumption.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> Who can donate food?</h2>
                    <div class="faq-answer">
                        <p>Restaurants, mess owners, catering services, and any other food establishments can donate
                            their surplus food to our organization.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> How can I donate food?</h2>
                    <div class="faq-answer">
                        <p>You can contact us through our website or hotline to schedule a pick-up or drop-off of your
                            leftover food.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> What types of food do you accept?</h2>
                    <div class="faq-answer">
                        <p>We accept all types of prepared foods, as long as they are properly stored and handled. This
                            includes cooked meals, packaged items, and baked goods.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> Can individuals donate food as well?</h2>
                    <div class="faq-answer">
                        <p>Currently, we focus on collecting food from businesses to ensure consistency and safety.
                            However, individual donations may be considered on a case-by-case basis.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> How do you distribute the food?</h2>
                    <div class="faq-answer">
                        <p>We work with local shelters, food banks, and community centers to distribute the food to
                            those in need.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> Is there a cost to donate food?</h2>
                    <div class="faq-answer">
                        <p>No, there is no cost to donate food. Our services are free for both donors and recipients.
                        </p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> How often can I donate food?</h2>
                    <div class="faq-answer">
                        <p>You can donate as frequently as you have surplus food. Regular donors are highly encouraged.
                        </p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> How do you ensure the food reaches those in need
                        promptly?</h2>
                    <div class="faq-answer">
                        <p>We have an efficient logistics system in place to ensure that food is collected and
                            distributed as quickly as possible to maintain freshness and safety.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> How can I contact your organization?</h2>
                    <div class="faq-answer">
                        <p>You can contact us through our website, email, or hotline. All contact information is
                            available on our website.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> How can I spread the word about your organization?
                    </h2>
                    <div class="faq-answer">
                        <p>You can help by sharing our mission on social media, telling your friends and family, and
                            encouraging local businesses to participate in our food donation program.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> What challenges does your organization face?</h2>
                    <div class="faq-answer">
                        <p>Ensuring a steady supply of surplus food is one of our primary challenges. Additionally,
                            coordinating timely pick-ups and deliveries to maintain food quality requires significant
                            logistical planning. Building awareness and gaining trust within the community also takes
                            continuous effort.</p>
                    </div>
                </div>

                <div class="faq-question">
                    <h2>&nbsp;<i class="fas fa-question-circle"></i> How long has your organization been operating?</h2>
                    <div class="faq-answer">
                        <p>We are a new organization, established in [insert year], dedicated to reducing food waste and
                            helping those in need.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', function () {
                    this.classList.toggle('active');
                    const answer = this.querySelector('.faq-answer');
                    if (answer.style.display === 'block') {
                        answer.style.display = 'none';
                    } else {
                        answer.style.display = 'block';
                    }
                });
            });
        });
    </script>
</body>

</html>