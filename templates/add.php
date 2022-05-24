
        <form class="form form--add-lot container <?= $form ?? ""?>" action="../add.php" method="post" enctype="multipart/form-data">
            <h2>Добавление лота</h2>
            <div class="form__container-two">
                <div class="form__item <?= $err['lot_name'] ?? ""?>">
                    <label for="lot-name">Наименование <sup>*</sup></label>
                    <input id="lot-name" type="text" name="lot_name" placeholder="Введите наименование лота" value="<?= $_POST['lot_name'] ?? ""?>">
                    <?= $message['lot_name']  ?? ""?>
                </div>
                <div class="form__item <?= $err['category']  ?? ""?>">
                    <label for="category">Категория <sup>*</sup></label>
                    <select id="category" name="category" value="<?=$_POST['category'] ?? ""?>">
                        <option>Выберите категорию</option>
                        <?php
                        foreach($arraycategory as $cat)
                        {
                            ?>
                            <option <?=isset($_POST['category']) && $_POST['category']==$cat['name']?" selected":""?>><?=$cat['name']?></option>
                       <?php
                        }
                            ?>
                    </select>
                    <?=$message['category'] ?? ""?>
                </div>
            </div>
            <div class="form__item form__item--wide <?= $err['description'] ?? ""?>">
                <label for="message">Описание <sup>*</sup></label>
                <textarea id="message" name="description" placeholder="Напишите описание лота"><?=$_POST['description'] ?? ""?></textarea>
                <?= $message['description']  ?? ""?>
            </div>
            <div class="form__item form__item--file <?= $err['image']  ?? ""?>">
                <label>Изображение <sup>*</sup></label>
                <div class="form__input-file">
                    <input name="image" class="visually-hidden" type="file" id="lot-img">
                    <label for="lot-img">
                        Добавить
                    </label>
                </div>
                <?= $message['image'] ?? ""?>
            </div>
            <div class="form__container-three">
                <div class="form__item form__item--small <?= $err['initial_price']  ?? ""?>">
                    <label for="lot-rate">Начальная цена <sup>*</sup></label>
                    <input id="initial_price" type="text" name="initial_price" placeholder="0" value="<?=$_POST['initial_price'] ?? ""?>">
                    <?= $message['initial_price']  ?? ""?>
                </div>
                <div class="form__item form__item--small <?= $err['bid_step']  ?? ""?>">
                    <label for="lot-step">Шаг ставки <sup>*</sup></label>
                    <input name="bid_step" id="lot-step" type="text" placeholder="0" value="<?=$_POST['bid_step'] ?? ""?>">
                    <?= $message['bid_step']  ?? ""?>
                </div>
                <div class="form__item <?= $err['completion_date']  ?? ""?>">
                    <label for="lot-date">Дата окончания торгов <sup>*</sup></label>
                    <input name="completion_date" class="form__input-date" id="lot-date" type="text" name="lot-date" placeholder="Введите дату в формате ГГГГ-ММ-ДД" value="<?=$_POST['completion_date'] ?? ""?>">
                    <?= $message['completion_date']  ?? ""?>
                </div>
            </div>
            <?= $message['form'] ?? ""?>
            <button type="submit" class="button">Добавить лот</button>
        </form>
