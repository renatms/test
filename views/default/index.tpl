<form action="/IndexController.php" method="post">
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

        {foreach $rsTasks as $item}
            <tr>
                <td></td>
                {*<td>{$rsUsers[$item['user_id']]['0']}</td>*}
                {*<td>{$rsUsers[$item['user_id']]['1']}</td>*}
                <td>{$item['user_sort']}</td>
                <td>{$item['email_sort']}</td>

                {if $admin==0}
                    <td>{$item['task']}</td>
                    <td>{$status[$item['status']]}</td>
                {else}
                    <td>
                        <input type="text" name="task[]" value="{$item['task']}">
                    </td>
                    <td>

                        <select name="field[]">
                            <option selected="selected" value="{$item['status']}">{$status[$item['status']]}</option>
                            <option value="1">Выполнено</option>
                            <option value="0">Не выполнено</option>
                        </select>
                    </td>
                {/if}
                <td>
                    {if $admin==1}
                        <button type="submit" class="btn" name="id" value="{$item['id']}{$indexTask++}">
                            Изменить
                        </button>
                    {/if}
                </td>
            </tr>
        {/foreach}

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
    <a href="{$url}" title="Первая страница">&lt;&lt;&lt;</a>
    <a href="{if $active == $count_show_pages} {$url}  {else} {$url_page}{($active - $count_show_pages)}{/if}"
       title="Предыдущая страница">&lt;</a>

    {if $active != $count_pages}
        <a href="{$url_page}{($active + $count_show_pages)}" title="Следующая страница">&gt;</a>
        <a href="{$url_page}{$count_pages}" title="Последняя страница">&gt;&gt;&gt;</a>
    {/if}
</div>





