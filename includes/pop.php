<div class="popdiv" id="popdiv">
    <center>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_tg5s3jcu.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player></center>
    <form action="includes/process.php" method="post">
        <input class="popinp" type="text" name="event_name" placeholder="Event Name"><br>
        <select class="popsel" name="event_type">
            <option value="party">Party</option>
            <option value="dance">Dance</option>
            <option value="music">Music</option>
            <option value="social">Social</option>
        </select><br>
        <input class="popinp" type="date" name="date"><br>
        <input class="popbtn" type="submit" name="submit" value="Submit">
    </form>
</div>