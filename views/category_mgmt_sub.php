<?php if (!empty($data['category_list'])) :
    $i = 0;
    foreach ($data['category_list'] as $category_list) : extract($category_list); ?>
        <tr>
            <th scope="row"><?= $category_id ?></th>
            <td><?= $category_name ?></td>
            <td><?= $data['count_prod'][$i][0]['count'] ?></td>
            <td class="text-center utility">
                <div class="d-flex justify-content-center">
                    <form action="<?= URLROOT ?>/Admin/showEdit/<?= $category_id ?>" method="POST">
                        <button name="editCategory" type="submit" class="material-symbols-outlined edit border border-0 bg-white">edit</button>
                    </form>
                    <form action="<?= URLROOT ?>/Admin/deleteCategory/<?= $category_id ?>" method="POST">
                        <button name="deleteCategory" type="submit" class="material-symbols-outlined delete border border-0 bg-white">delete</button>
                    </form>
                </div>
            </td>
        </tr>
<?php $i++;
    endforeach;
endif; ?>