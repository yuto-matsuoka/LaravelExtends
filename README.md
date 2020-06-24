# LaravelExtends  
## 環境
Laravel：Laravel Framework 6.18.20  
PHP：7.4  
Vue.js：12.18.1 LTS  
Three.js：r117  
  
## 環境構築

　1.Homebrewインストール(Composerインストール用)  
 　　https://brew.sh/index_ja  
　　　→正常にインストールできたか怪しかったら「brew -v」で確認  

　　　1.5.PHPのインストール  
　　　　brew install php@7.4
　　　　　→正常にインストールできたか怪しかったら「php -v」で確認  
  
　2.Composerインストール  
　　(terminal)brew install composer  
　　　→正常にインストールできたか怪しかったら「composer -v」で確認  
  
　3.Laravelのプロジェクト作成  
　　(terminal)composer create-project "laravel/laravel=6.*" sampleProject 　　←プロジェクト名  
　　　→正常に作成できたか怪しかったら「php artisan -V」で確認
  
　4.起動  
　　(terminal)php artisan serve  
　　　(ブラウザ)localhost:8000  
  
　5.Vue.js  
　　5.1.https://nodejs.org/ja/  
　　　→インストーラーをダウンロードしてインストール  

　　5.2(terminal)npm install   

　6.Three.js  
　　(terminal)npm install three.js vue  

## git cloneで環境構築
　1.clone  
　2.composer install  
　3.「.env」作成　　←「.env.example」を参考に（最初はコピーするだけでも大丈夫）  
　4.(terminal)php artisan key:generate　←「.env」のAPP_KEYを発行してくれる。  
　5.(terminal)npm install  
　6.(terminal)npm install three.js vue  
　7.(terminal)php artisan serve  
　8.(ブラウザ)localhost:8000  

## ディレクトリ構成
　https://qiita.com/shosho/items/93cbff79376c41c3a30b  
　　→これがめっちゃわかりやすい







