<div class="py-4 bg-light">
    <div class="container">
        <div class="h3 mb-0">Contact Us</div>
    </div>
</div>
<div class="container py-4">
    <div class="mb-4 fw-bold" style="max-width: 500px;">
        We are some people love learing and share.
    </div>
    <ul>
        <li>Email: aaabbccc@gmail.com</li>
        <li>Address: Beijing</li>
        <li>Phone Num: 12345678</li>
    </ul>
    <img src="./img/logo.jpg" alt="Logo" class="mb-5" style="width: 200px;">
    <iframe frameborder="0" class="map d-block mb-3 rounded-4" style="max-width: 100%; width: 500px; height: 300px;"></iframe>
    <div class="position">
        Your Position：<span class="info"></span>
    </div>
    <h3 class="my-4">Feedback</h3>
    <form class="__gasjs">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <input type="email" class="form-control" required placeholder="Please enter the email address">
            </div>
            <div class="col-lg-4 mb-4">
                <input type="text" class="form-control" required placeholder="Please enter a nickname">
            </div>
            <div class="col-lg-4 mb-4">
                <input type="url" class="form-control" required placeholder="Please enter your website address">
            </div>
            <div class="col-12 mb-4">
                <textarea class="form-control" rows="10" required></textarea>
            </div>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
    <script>
        jQuery('form.__gasjs').submit((event) => {
            event.preventDefault()
            var email = jQuery('[type="email"]').val()
            var text = jQuery('[type="text"]').val()
            var url = jQuery('[type="url"]').val()
            var content = jQuery('textarea').val()
            var xhr = new XMLHttpRequest()
            xhr.open('POST', './', false)
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
            xhr.send(`email=${email}&text=${text}&url=${url}&content=${content}`)
            document.cookie = `email=${email}`
            document.cookie = `text=${text}`
            document.cookie = `url=${url}`
            document.cookie = `content=${content}`
            localStorage.setItem('email', email)
            localStorage.setItem('text', text)
            localStorage.setItem('url', url)
            localStorage.setItem('content', content)
            alert('Your information has been submitted to the server, thank you for your fill in')
        })

        function showPosition(position) {
            var mapUrl = `http://api.map.baidu.com/staticimage?center=${position.coords.longitude},${position.coords.latitude}&width=500&height=300&zoom=11`
            jQuery('.position .info').text(`经度：${position.coords.longitude}，纬度：${position.coords.latitude}`)
            jQuery('iframe.map').attr('src', mapUrl)
        }
        navigator.geolocation.getCurrentPosition(showPosition)
        navigator.geolocation.watchPosition(showPosition)
    </script>
</div>