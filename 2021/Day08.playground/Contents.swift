import UIKit


// MARK: Solution

func solution(_ str : String) -> String {
    
    var result = ""
    
    // 空白とハイフンを削除
    var newStr: String {
        let dictionary = [" ": "", "-": ""]
        return dictionary.reduce(str) { $0.replacingOccurrences(of: $1.key, with: $1.value) }
    }
    
    // 3桁ずつハイフン区切り
    var count = -2
    for c in newStr {
        result.append(c)
        if count % 3 == 0 {
            result.append("-")
        }
        count += 1
    }
    
    // 最後のハイフンを削除
    if result.last == "-" {
        result = String(result.dropLast())
    }
    
    // 最後から2番目がハイフンであればハイフンを左に一つずらす
    var charArray = Array(result)
    let secondLastChar = charArray.count - 2
    if (charArray[secondLastChar] == "-") {
        charArray[secondLastChar] = charArray[secondLastChar - 1]
        charArray[secondLastChar - 1] = "-"
    }
    
    return String(charArray)
}


// MARK: Test Case

solution("123456789")            // 123-456-789
solution("555372654")            // 555-372-654
solution("0 - 22 1985--324")     // 022-198-53-24
solution("01")                   // 01
solution("012")                  // 012
solution("0123")                 // 01-23
solution("0123       444")       // 012-34-44
solution("------0123       444") // 012-34-44
