<div>
    <div class="bg-red-500 flex justify-center py-6 h-[400px]">
        <img src="https://image-skincare.ru/wa-data/public/shop/products/28/06/628/images/1419/1419.600.jpg">
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created_at</th>
            <th>Updated_at_at</th>
        </tr>
        <tr>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['created_at']}}</td>
            <td>{{$user['updated_at']}}</td>
        </tr>

    </table>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</div>

<style>
    .aligncenter {
        text-align: center;
    !important;
    }
</style>
