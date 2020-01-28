# 標準入力 取得

### PHP
```php
# 1行 tirm付き
$line = trim(fgets(STDIN));


# 整数の入力
fscanf(STDIN, "%d", $a);
# 文字列の入力
fscanf(STDIN, "%s", $a);

# スペース区切りの整数入力。それを引数にそれぞれ代入
fscanf(STDIN, "%d %d %d", $a, $b, $c);
# スペース区切りの文字列入力。それを引数にそれぞれ代入
fscanf(STDIN, "%s %s %s", $a, $b, $c);
```

# 半角スペースを区切りとして、配列に格納
```$xslt
$arr = explode(" ", fgets(STDIN));
echo $arr[0]; // 1
echo $arr[1]; // 2
echo $arr[2]; // 3
```


### Ruby
```ruby
# 一行
puts a = gets

# 一行 整数
puts a = gets.to_i

# スペース区切りの文字列 1 2 だと、["1", "2"]で返る
puts a = gets.split(" ")

# 改行文字の取り除き
puts a = gets.chomp.split(" ")

# mapで回して、&:to_iで整数にキャスト
 # 10 20だと、a=10 b=20 になる
a,b = gets.chomp.split(" ").map(&:to_i)
```
