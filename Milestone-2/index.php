<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Milestone 2</title>
</head>

<body>
    <main id="root">
        <div class="wrapper">
            <div class="contenitore-brani">
                <div v-for="dati in database" class="contenitore-card">
                    <img :src="dati.poster" alt="" />
                    <h3>{{ dati.title }}</h3>
                    <small>{{ dati.author }}</small>
                    <small>{{ dati.year }}</small>
                </div>
            </div>
        </div>
    </main>



    <script src="script.js"></script>
</body>

</html>