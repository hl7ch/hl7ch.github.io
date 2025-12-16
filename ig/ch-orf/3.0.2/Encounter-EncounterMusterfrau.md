# Encounter Emergency - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Encounter Emergency**

## Example Encounter: Encounter Emergency

Profile: [CH ORF Requested Encounter](StructureDefinition-ch-orf-encounter.md)

**CH ORF Desired Accommodation**: [BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe: 2](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-21-encountertype.html#bfs-medstats-21-encountertype-2) (halbprivat)

**status**: Planned

**class**: [ActCode: EMER](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-EMER) (emergency)

**subject**: [Erika Musterfrau (official) Female, DoB: 1970-03-14 ( Medical record number)](Patient-ErikaMusterfrau.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "EncounterMusterfrau",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-encounter"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-desiredaccommodation",
      "valueCoding" : {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
        "code" : "2",
        "display" : "halbprivat"
      }
    }
  ],
  "status" : "planned",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "EMER",
    "display" : "emergency"
  },
  "subject" : {
    "reference" : "Patient/ErikaMusterfrau"
  }
}

```
