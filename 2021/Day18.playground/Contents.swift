import UIKit


// MARK: - Solution

func solution(_ text: String) -> String {
    var chars = Array(text)
    
    var result = [String]()
    
    for c in chars {
        result.append(String(c))
    }
    
    for i in 0..<result.count {
        chars[i] = Character(result.popLast()!)
    }
    
    return String(chars)
}


// MARK: - Test Case

solution("abc")
solution("Would you like to play a game?")
