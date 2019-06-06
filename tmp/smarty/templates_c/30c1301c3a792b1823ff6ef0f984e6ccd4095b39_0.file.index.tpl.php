<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-05 17:44:21
  from 'D:\Programs\Openserver\OSPanel\domains\testmade\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5cf7d54559bd68_61893305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c1301c3a792b1823ff6ef0f984e6ccd4095b39' => 
    array (
      0 => 'D:\\Programs\\Openserver\\OSPanel\\domains\\testmade\\views\\default\\index.tpl',
      1 => 1559745853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7d54559bd68_61893305 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/IndexController.php" method="post">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>№</th>
            <th><a href='index.tpl?sort=user_sort'>Пользователь</a></th>
            <th><a href='index.tpl?sort=email_sort'>Эл.почта</a></th>
            <th>Задание</th>
            <th><a href='index.tpl?sort=status'>Статус</a></th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsTasks']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr>
                <td></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_sort'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email_sort'];?>
</td>

                <?php if ($_smarty_tpl->tpl_vars['admin']->value == 0) {?>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['task'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</td>
                <?php } else { ?>
                    <td>
                        <input type="text" name="task[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['task'];?>
">
                    </td>
                    <td>

                        <select name="field[]">
                            <option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</option>
                            <option value="1">Выполнено</option>
                            <option value="0">Не выполнено</option>
                        </select>
                    </td>
                <?php }?>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value == 1) {?>
                        <button type="submit" class="btn" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                            Изменить
                        </button>
                    <?php }?>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <tr>
            <td>

            </td>
            <td>
                <input type="text" class="input-small" placeholder="Пользователь" name="name">
            </td>
            <td>
                <input type="text" class="input-small" placeholder="Эл.почта" name="email">
            </td>
            <td>
                <input type="text" class="input-small" placeholder="Задание" name="addtask">
            </td>
        </tr>

        </tbody>
    </table>
    <button type="submit" class="btn" name="add" value="add">Добавить</button>
</form>

<!-- Дальше идёт вывод Pagination -->
<div id="pagination">
    <span>Страницы: </span>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" title="Первая страница">&lt;&lt;&lt;</a>
    <a href="<?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['count_show_pages']->value) {?> <?php echo $_smarty_tpl->tpl_vars['url']->value;?>
  <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['url_page']->value;
echo ($_smarty_tpl->tpl_vars['active']->value-$_smarty_tpl->tpl_vars['count_show_pages']->value);
}?>"
       title="Предыдущая страница">&lt;</a>

    <?php if ($_smarty_tpl->tpl_vars['active']->value != $_smarty_tpl->tpl_vars['count_pages']->value) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_page']->value;
echo ($_smarty_tpl->tpl_vars['active']->value+$_smarty_tpl->tpl_vars['count_show_pages']->value);?>
" title="Следующая страница">&gt;</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_page']->value;
echo $_smarty_tpl->tpl_vars['count_pages']->value;?>
" title="Последняя страница">&gt;&gt;&gt;</a>
    <?php }?>
</div>





<?php }
}
