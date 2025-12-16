# Biopsie Duodenum / Magen - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Biopsie Duodenum / Magen**

## Example Observation: Biopsie Duodenum / Magen

Profile: [CH eTOC Pathology Observation](StructureDefinition-ch-etoc-pathology-observation.md)

**status**: Final

**code**: Biopsien Duodenum, Magen, unruhige Z-Linie vom 19.09.2018:
Die Veränderungen der Duodenalschleimhaut passen gut zu einem geringen petpischen Schleimhautschaden. Die Magenschleimhaut zeigt das Bild einer reaktiven Gastropathie. Erosive Veränderungen gelangen hier nicht zur Darstellung. Kein Helicobacter, keine Metaplasie, keine pathogenen Erreger nachgewiesen.

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Biopsy",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-pathology-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "60570-9",
        "display" : "Pathology Consult note"
      }
    ],
    "text" : "Biopsien Duodenum, Magen, unruhige Z-Linie vom 19.09.2018:\nDie Veränderungen der Duodenalschleimhaut passen gut zu einem geringen petpischen Schleimhautschaden. Die Magenschleimhaut zeigt das Bild einer reaktiven Gastropathie. Erosive Veränderungen gelangen hier nicht zur Darstellung. Kein Helicobacter, keine Metaplasie, keine pathogenen Erreger nachgewiesen."
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
