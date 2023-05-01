<?php
class Validation
{
    public function validate($form)
    {
        $error = [];
            if ($form['name'] === '' || mb_ereg_match('^(\s|　)+$', $form['name'])) {
                $error['name'] = '名前が入力されていません';
            }
            if ($form['phoneNumber'] === '' || mb_ereg_match('^(\s|　)+$', $form['phoneNumber'])) {
                $error['phoneNumber'] = '電話番号が入力されていません';
            }
            if ($form['Email'] === '' || mb_ereg_match('^(\s|　)+$', $form['Email'])) {
                $error['Email'] = 'メールアドレスが入力されていません';
            }
            if ($form['inquiry'] === '' || mb_ereg_match('^(\s|　)+$', $form['inquiry'])) {
                $error['inquiry'] = 'お問い合わせ内容が入力されていません';
            } elseif (20 > mb_strlen($form['inquiry'], 'UTF-8')) {
                $error['inquiry'] = '20文字以上入力して下さい';
            }
            return $error;
    }
}
