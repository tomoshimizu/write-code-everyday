import UIKit

/*
 We are given a string S representing a phone number, which we would like to reformat. String S consists of N characters: digits, spaces, and/or dashes. It contains at least two digits.
 
 Spaces and dashes in string S can be ignored. We want to reformat the given phone number is such a way that the digits are grouped in blocks of length three, separated by single dashes. If necessary, the final block or the last two blocks can be of length two.
 
 For example:
 
 S = "00-44   48 5555 8361" should become
     "004-448-555-583-61"
 
 Assume:
 - S consists only of digits (0-9), spaces, and/or dashses (-)
 - S containts at least two digits
 
 Translate:
 
 Would like to reformat a phone number string so that:
 - every third char is a "-"
 - spaces and dashes don't matter
 - if the block ends in anything other than -xxx or -xx reformat to a block of two like xx-xx (not obvious)
 
 */
func solution(_ S : String) -> String {
    var result = ""
    
    // 数値以外の文字を取り除く
    let digitStr = S.filter { ("0"..."9").contains($0) }
    
    // 3つごとにハイフン区切りにする
    var charArray = [Character]()
    var i = 1
    for num in digitStr {
        if (i % 3 == 0) {
            charArray.append(num)
            charArray.append("-")
        } else {
            charArray.append(num)
        }
        i += 1
    }
    
    // 最後のハイフンを取り除く
    if (charArray.last! == "-") {
        charArray.removeLast()
    }
    
    // 最後から2番目がハイフンの場合はハイフンを一つ左にずらす
    let lastIdx = charArray.count-1
    if (charArray[lastIdx-1] == "-") {
        let tmp = charArray[lastIdx-1]
        charArray[lastIdx-1] = charArray[lastIdx-2]
        charArray[lastIdx-2] = tmp
    }
    
    // 配列→文字列
    for char in charArray {
        result += "\(char)"
    }
    
    return result
}

solution("123456789")           // 123-456-789
solution("555372654")           // 555-372-654
solution("0 - 22 1985--324")    // 022-198-532-4 → 022-198-53-24

// Edge cases
solution("01")                          // 01
solution("012")                         // 012
solution("0123")                        // 01-23
solution("0123       444")              // 012-34-44
solution("------0123       444")        // 012-34-44
