import scala.io.Source

object Solution {
    def main(args: Array[String]) = {
        var fileName = "./inputs/inputs3.txt"
        val input = Source.fromFile(fileName).getLines().toSeq
        var alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"

        val sum = input.map { items =>
        val (first, second) = items.splitAt(items.length / 2)
        val firstSet = first.toSet
        val secondSet = second.toSet
        val common = firstSet.intersect(secondSet)
        val priority = alphabet.indexOf(common.head).+(1)
        priority
        }.sum

        val sum2 = input.grouped(3).map { group =>
        val firstElf = group(0).toSet
        val secondElf = group(1).toSet
        val thirdElf = group(2).toSet
        val common = firstElf.intersect(secondElf).intersect(thirdElf)
        val priority = alphabet.indexOf(common.head).+(1)
        priority
        }.sum

        println(sum)
        println(sum2)
    }
}

