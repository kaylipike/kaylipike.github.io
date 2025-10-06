<?php
include 'top.php';
?>

<main>
    <h1>History</h1>
    <section>
        <h2>Old Civilization</h2>
        <p>China is one of the oldest civilizations that is still present in the modern world. There are some claims that the earliest rulers were the Xia Dynasty between 2100 and 1600 BC, though this is unconfirmed with little proof to support it. The earliest recorded rulers of China were the Shang Dynasty from 1600 to 1050 BC. This empire went from dynasty to dynasty making advancements and becoming a larger power in the world. Some notable events include the creation of the Silk Road for trade around 125 BC, the Opium Wars in the mid 1800s, various rebellions like the Taiping Rebellion and Boxer Rebellion, clashes with Japan, the declaration of independence of the Republic of China from the Qing Dynasty, the formation of the Communist Party of China, civil war which led to the People's Republic of China, Mao Zedong and the Great Leap Forward, and the Cultural Revolution. China's history is long and there is much to learn from it.</p>
        <cite><a href="https://www.history.com/topics/asian-history/china-timeline">History</a></cite>
        <table>
            <caption>Ruling Dynasties of China</caption>
            <tr>
                <th>Dynasty</th>
                <th>Time of Rule</th>
            </tr>          
<?php
$sql = 'SELECT pmkRulingDynasties, fldDynasty, fldYears ';
$sql .= 'FROM tblDynasties';
$statement = $pdo->prepare($sql);
$statement->execute();

$records = $statement->fetchAll();

foreach ($records as $record) {
    print '<tr>';
    print '<td>' . $record['fldDynasty'] . '</td>';
    print '<td>' . $record['fldYears'] . '</td>';
    print '</tr>' . PHP_EOL;
}
?>
            <tr> 
                <td colspan="2"><cite><a href="https://www.metmuseum.org/toah/hd/chem/hd_chem.htm">Metropolitan Museum</a></cite></td>
            </tr>
        </table>
    </section> 

    <section> 
        <h2>Timeline</h2> 
        <figure>
            <img alt="Timeline of Chinese history" src="images/timeline.png" class="rounded-image">
            <figcaption> Photo of a timeline of China's history <cite><a href="https://www.pinterest.com/pin/774830310912644261/">Pinterest</a></cite>​</figcaption>
        </figure>
    </section>

    <section>
        <h2>Arts</h2>
        <p>It is believed that up until China's Warring States Period (from 475-221 BCE) arts were produced anonymously for ruling courts. During the Warring States Period and Han Dynasty the class of landowners and merchants became much larger and so the idea of art as a leisure activity was formed. Since then, much culture has been documented in the creations people made throughout China's history. However, during the Cultural Revolution (from 1966 to 1976) artists were scorned and forced to make 'art' reflective of the revolution. Many old artifacts, artistic and academic, were destroyed. The restrictions put in place during the Cultural Revolutions have mostly remained intact. Full freedom of artistic expression is not present in China.</p>
        <cite><a href="https://www.britannica.com/art/Chinese-art/Characteristic-themes-and-symbols">Britannica</a></cite>
    </section>

        
    <section> 
        <h2>Philosophies</h2> 
        <p>Chinese philosophy has gone through four main stages. The first was classical. During this time Confucious and Laozi were prominent figures whose ways of teaching were well practiced.  Confucius thought Dao was the Way of man and the Way of virtue. However, Laozi thought Dao was the Way of nature. The second stage was neo-Daoist and Buddhist. There was a huge turn to solely metaphysical concepts. Buddhism schools were introduced from India and developed around the question of universality and particularity. The third stage was neo-confucian. The ideas of Buddhism and Daoism formed Confucianism. It was a sort of combination of beliefs from the first two stages of Chinese philosophy. The fourth and current stage is modern philosophy. Marxism is the official philosophy.</p>
        <cite><a href="https://www.britannica.com/topic/Chinese-philosophy">Britannica</a></cite>
    </section> 
</main>

<?php include 'footer.php'; ?>

</body>
</html>