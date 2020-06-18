## LaravelExtends
# 環境
Laravel：Laravel Framework 6.18.20  
PHP：7.4  
Vue.js：12.18.1 LTS  
Three.js：r117  
  
# 環境構築
---
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
  
---
　・Vue.js  
　　https://nodejs.org/ja/  
　　　→インストーラーをダウンロードしてインストール  

　　(terminal)npm install   

・Three.js  
　　(terminal)npm install three.js vue  

# ディレクトリ構成
　https://qiita.com/shosho/items/93cbff79376c41c3a30b  
　　→これがめっちゃわかりやすい







