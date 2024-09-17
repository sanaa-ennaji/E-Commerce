<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @page {
            size: A4;
            margin: 2cm;
        }
    </style>
</head>

<body class="font-sans bg-gray-100">
    <div class="container mx-auto p-10 mt-1">
        <div class="mb-8 text-center">
            <h1 class="text-4xl font-bold">Facture</h1>
        </div>
        <div class="flex justify-between mb-8">
            <div>
                <p class="font-bold">De:</p>
                <p>E-COMMERCE</p>
                <p>Safi, Maroc</p>
                <p>Email: e-commerce@gmail.com</p>
            </div>
            <div>
                <p class="font-bold">À:</p>
                <div class="flex flex-row">
                    <p>Nom de client:&nbsp;<?php echo $factureDetails['nom_client']; ?></p>
                </div>
                <div class="flex flex-row">
                    <p>ID_client:&nbsp;<?php echo $factureDetails['ID_client']; ?></p>
                </div>
                <div class="flex flex-row">
                    <p>Email:&nbsp;<?php echo $factureDetails['email_client']; ?></p>
                </div>
                <div class="flex flex-row">
                    <p>ID_facture:&nbsp;<?php echo $factureDetails['ID_facture']; ?></p>
                </div>
            </div>
        </div>

        <table class="w-full border-collapse border border-gray-400 mb-8">
            <thead>
                <tr>
                    <th class="border border-gray-400 p-2">Produit</th>
                    <th class="border border-gray-400 p-2">Quantité</th>
                    <th class="border border-gray-400 p-2">Prix unitaire</th>
                    <th class="border border-gray-400 p-2">Total</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($factureProducts as $product) : ?>
                    <tr>
                        <td class="border border-gray-400 p-2"><?php echo $product['nom_produit']; ?></td>
                        <td class="border border-gray-400 p-2"><?php echo $product['quantite']; ?></td>
                        <td class="border border-gray-400 p-2"><?php echo $product['prix_unitaire']; ?></td>
                        <td class="border border-gray-400 p-2"><?php echo $product['total']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="flex justify-end">
            <div class="w-1/5">
                <p class="mb-2">Sous-total: <?php echo $factureDetails['sous_total']; ?></p>
                <p class="mb-2">Frais d'expédition: <?php echo $factureDetails['frais_expedition']; ?></p>
                <p class="mb-2">Total: <?php echo $factureDetails['total']; ?></p>
            </div>
        </div>

        <div class="text-center mt-8">
            <p>Merci de faire affaire avec nous!</p>
        </div>
    </div>
</body>

</html>
