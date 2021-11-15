<table>
    <thead>
        <tr>
            <td>
                Currency
            </td>
            <td>
                Price
            </td>
        </tr>
    </thead>
    <tbody>
        <?php
        /**
         * @var $ticker
         */
            foreach ($ticker as $curr => $data) {
                ?>
                <tr>
                    <td>
                        <?php echo $curr ?>
                    </td>
                    <td>
                        <?php echo $data['last'] ?>
                    </td>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>
