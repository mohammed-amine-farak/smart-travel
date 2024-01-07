
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <br><br><br><br>
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    route id
                </th>
                <th scope="col" class="px-6 py-3">
                    distance
                </th>
                <th scope="col" class="px-6 py-3">
                    durée
                </th>
                <th scope="col" class="px-6 py-3">
                ville_de_départ
                </th>
                <th scope="col" class="px-6 py-3">
                ville_de_destination
                </th>
                <th scope="col" class="px-6 py-3">
                 Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($route as $r){
              ?>
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$r->getId()?> 
                </th>
                <td class="px-6 py-4">
                    <?=$r->getDistance()?> km
                </td>
                <td class="px-6 py-4">
                    <?=$r->getDurée()?>
                </td>
                <td class="px-6 py-4">
                    <?=$r->getVille_de_départ()?>
                </td>
                <td class="px-6 py-4">
                    <?=$r->getVille_de_destination()?>
                </td>
                <td class="px-6 py-4">
                    <a href="updateRoute.php?id=<?=$r->getId()?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
              <?php  
            }
            ?>
            
           
        </tbody>

   
    </body>
    </html>