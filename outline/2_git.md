# Github flowとは何かを述べてください
## a. 下記の文言を必ず含めてください
- i. リポジトリ
- ii. main
- iii. リモート
- iv. ブランチ

### 答え
GitHub Flowもgit-flowと同様にブランチ戦略の1つであり、その名の通りGitHubで利用されているフローです。<br>

GitHub Flowではmainブランチと機能開発のためのtopicブランチの2つのみのシンプルな構成になっています。
特徴としては、Pull Requestを使うという点と、mainブランチは常にデプロイ可能という点があります。

#### GitHub Flowの開発の流れ
1. リモートmainブランチからローカルmainブランチへpull 
2. トピックブランチを作成
3. 開発 - add
4. 開発 - commit
5. ローカルトピックブランチからリモートトピックブランチへpush
6. Pull Request
7. マージ or 修正依頼(※再push)