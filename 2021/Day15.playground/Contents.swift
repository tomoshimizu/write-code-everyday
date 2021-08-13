import UIKit

struct Stack {
    fileprivate var array: [String] = []
    
    /// Push
    mutating func push(_ element: String) {
        array.append(element)
    }

    /// Pop
    mutating func pop() -> String? {
        return array.popLast()
    }
    
    /// Peek
    func peek() -> String? {
        return array.last
    }
}

var bookStack = Stack()
bookStack.push("楽園のカンヴァス")
bookStack.push("暗幕のゲルニカ")
bookStack.push("たゆたえども沈まず")
print(bookStack.array)

bookStack.pop()
print(bookStack.array)

print(bookStack.peek()!)
