# Limitation 20416.XX - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 20416.XX**

## Example ClinicalUseDefinition: Limitation 20416.XX

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Für alle vergütungspflichtigen Indikationen gilt:Vor Therapiebeginn muss für alle vergütungspflichtigen Indikationen eine Kostengutsprache des Krankenversicherers nach vorgängiger Konsultation des Vertrauensarztes eingeholt werden. Eine Kostengutsprache hat den entsprechenden Indikationscode (20416.XX) zu enthalten.Die Dosierung beträgt maximal 200 mg alle drei Wochen sofern nicht anders festgelegt.Die maximale Anzahl Behandlungen bzw. Zyklen beträgt 35 sofern nicht anders festgelegt. Klinisch stabile Patienten mit initialem Befund einer Progression können bis zur Bestätigung der Progression der Erkrankung weiter behandelt werden.Falls KEYTRUDA in einer bestimmten Indikation in erster Linie vergütet wurde und es unter KEYTRUDA-Therapie nach kurzzeitigem Ansprechen zu einer Progression kam, soll KEYTRUDA in derselben Indikation in nachfolgenden Therapielinien nicht mehr vergütet werden.MSD Merck Sharp & Dohme AG erstattet nach Aufforderung durch denjenigen Krankenversicherer, bei dem die versicherte Person zum Zeitpunkt des Bezugs versichert war, für alle Indikationen einen festgelegten Betrag pro nachweislich verabreichter Packung KEYTRUDA (2 Durchstf) zurück. Es gelten die zum Verabreichungszeitpunkt aktuellen Preise und Prozentsätze. Die Mehrwertsteuer kann nicht zusätzlich zu diesem Anteil des Fabrikabgabepreises zurückgefordert werden. Die Aufforderung zur Rückerstattung soll zeitnah zur Verabreichung erfolgen.Für die Rückforderung von Rückerstattungen gegenüber der Zulassungsinhaberin hat der Krankenversicherer jeweils den hinter der jeweiligen Indikation angegebenen Indikationscode zwingend bekanntzugeben. Der Indikationscode ist vom Leistungserbringer an die Krankenversicherer zu übermitteln. |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-20416.XX",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "text" : "Für alle vergütungspflichtigen Indikationen gilt:\nVor Therapiebeginn muss für alle vergütungspflichtigen Indikationen eine Kostengutsprache des Krankenversicherers nach vorgängiger Konsultation des Vertrauensarztes eingeholt werden. Eine Kostengutsprache hat den entsprechenden Indikationscode (20416.XX) zu enthalten.\nDie Dosierung beträgt maximal 200 mg alle drei Wochen sofern nicht anders festgelegt.\nDie maximale Anzahl Behandlungen bzw. Zyklen beträgt 35 sofern nicht anders festgelegt. Klinisch stabile Patienten mit initialem Befund einer Progression können bis zur Bestätigung der Progression der Erkrankung weiter behandelt werden.\nFalls KEYTRUDA in einer bestimmten Indikation in erster Linie vergütet wurde und es unter KEYTRUDA-Therapie nach kurzzeitigem Ansprechen zu einer Progression kam, soll KEYTRUDA in derselben Indikation in nachfolgenden Therapielinien nicht mehr vergütet werden.\n\nMSD Merck Sharp & Dohme AG erstattet nach Aufforderung durch denjenigen Krankenversicherer, bei dem die versicherte Person zum Zeitpunkt des Bezugs versichert war, für alle Indikationen einen festgelegten Betrag pro nachweislich verabreichter Packung KEYTRUDA (2 Durchstf) zurück. Es gelten die zum Verabreichungszeitpunkt aktuellen Preise und Prozentsätze. Die Mehrwertsteuer kann nicht zusätzlich zu diesem Anteil des Fabrikabgabepreises zurückgefordert werden. Die Aufforderung zur Rückerstattung soll zeitnah zur Verabreichung erfolgen.\nFür die Rückforderung von Rückerstattungen gegenüber der Zulassungsinhaberin hat der Krankenversicherer jeweils den hinter der jeweiligen Indikation angegebenen Indikationscode zwingend bekanntzugeben. Der Indikationscode ist vom Leistungserbringer an die Krankenversicherer zu übermitteln."
      }
    },
    "intendedEffect" : {
      "concept" : {
        "coding" : [{
          "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
          "code" : "200000003194",
          "display" : "therapeutic"
        }]
      }
    }
  }
}

```
