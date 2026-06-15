# 1 Einsatzprotokoll - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Einsatzprotokoll**

## Example Composition: 1 Einsatzprotokoll



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "1-Einsatzprotokoll-Composition",
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:658ab5ea-1f63-11e6-b6ba-3e1d05defe78"
  },
  "status" : "final",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "67796-3",
      "display" : "EMS patient care report - version 3 Document NEMSIS"
    },
    {
      "system" : "http://snomed.info/sct",
      "code" : "371535009",
      "display" : "Transfer summary report (record artifact)"
    }],
    "text" : "Einsatzprotokoll Rettungsdienst"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "date" : "2016-12-10T13:05:00.000+01:00",
  "author" : [{
    "reference" : "PractitionerRole/1-SaniPetraMuster-PR"
  },
  {
    "reference" : "PractitionerRole/1-NotarztPierreUrgentiste-PR"
  }],
  "title" : "Einsatzprotokoll Rettungsdienst",
  "confidentiality" : "N",
  "_confidentiality" : {
    "extension" : [{
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "17621005",
          "display" : "Normal"
        }],
        "text" : "Normal"
      }
    }]
  },
  "attester" : [{
    "mode" : "legal",
    "time" : "2016-12-10T13:13:05.000+01:00",
    "party" : {
      "reference" : "Practitioner/1-SaniPetraMuster"
    }
  }],
  "custodian" : {
    "reference" : "Organization/1-Rettungsdienst"
  },
  "section" : [{
    "title" : "Einsatz",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100001",
        "display" : "intervention"
      }],
      "text" : "Einsatz"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><tbody><tr><th>Einsatz</th></tr><tr><td>Einsatzdatum:</td><td>10.12.2016</td></tr><tr><td>Einsatznummer:</td><td>S12345678</td></tr><tr><td>Aufbietende Organisation:</td><td>SNZ (GLN 7601002156370)</td></tr><tr><td>Aufgebotene Organisation:</td><td>Rettungsdienst Schutz und Rettung Zürich (GLN 7601002156363)</td></tr><tr><td>Teammitglieder:</td><td>Petra Muster (Rettungssanitäterin), Hans Transportsanitäter (Transportsanitäter), Pierre Urgentiste (Notarzt)</td></tr><tr><td>Einsatzort:</td><td>Zürich, Waldrand (47.392115, 8.553192)</td></tr><tr><td>Zielort:</td><td>Universitätsspital Zürich, Notfall</td></tr></tbody></table><table><tbody><tr><th>Alarmierungszeit:</th><th>Dispositionszeit:</th><th>Ausrückzeit:</th><th>Ankunftszeit am Einsatzort:</th><th>Ankunftszeit beim Patienten:</th><th>Abfahrtszeit vom Einsatzort:</th><th>Ankunftszeit am Zielort:</th></tr><tr><th>12:09</th><th>12:11</th><th>12:13</th><th>12:17</th><th>12:22</th><th>12:48</th><th>12:54</th></tr></tbody></table></div>"
    },
    "entry" : [{
      "reference" : "Encounter/1-Einsatz"
    },
    {
      "reference" : "Observation/1-Alarm"
    },
    {
      "reference" : "Observation/1-Disposition"
    },
    {
      "reference" : "Observation/1-Rollout"
    },
    {
      "reference" : "Observation/1-ArrivalOnScene"
    },
    {
      "reference" : "Observation/1-ArrivalPatient"
    },
    {
      "reference" : "Observation/1-DepartureFromScene"
    },
    {
      "reference" : "Observation/1-ArrivalAtTarget"
    },
    {
      "reference" : "Procedure/1-Transport"
    },
    {
      "reference" : "Location/1-Rettungswagen"
    }]
  },
  {
    "title" : "Administrativ",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100003",
        "display" : "administrative"
      }],
      "text" : "Administrativ"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><tbody><tr><th>Beteiligte Person</th></tr><tr><td>Ehefrau:</td><td>Erika Müller</td></tr></tbody></table></div>"
    }
  },
  {
    "title" : "Vorbehandlung",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100004",
        "display" : "pretreatment"
      }],
      "text" : "Vorbehandlung"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span>-</span></div>"
    }
  },
  {
    "title" : "Anamnese",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100005",
        "display" : "anamnesis"
      }],
      "text" : "Anamnese"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><tbody><tr><th>Ereignis:</th></tr><tr><td>Hat sich beim Spazieren im Wald schlecht gefühlt und ist abgesessen.</td></tr></tbody></table><table><tbody><tr><th>Symptome:</th></tr><tr><td>Starke Schmerzen in der Brust und im linken Oberarm verspürt.</td></tr></tbody></table><h4>Allergien / Unverträglichkeiten:</h4><ul><li>Allergisch auf Baumpollen</li><li>bekannte Unverträglichkeitsreaktion auf einzelne Medikamente</li></ul><h4>Bestehende Medikation</h4><ul><li>Aspirin Cardio 100 (1 Tbl./Tag)</li></ul><h4>Medizinische Vorgeschichte:</h4><ul><li>Herzvorfall vor vier Jahren, der im Triemlispital in Zürich behandelt wurde</li></ul><h4>Weiteres:</h4><ul><li>Seit dem Frühstück um ca. 8 Uhr hat er nichts mehr gegessen</li><li>Thomas Müller hat keine Patientenverfügung erstellt</li><li>Es sind keine anderen medizinischen Probleme bekannt</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Observation/1-Anamnese"
    },
    {
      "reference" : "Observation/1-Symptome"
    },
    {
      "reference" : "AllergyIntolerance/1-Baumpollen"
    },
    {
      "reference" : "AllergyIntolerance/1-Medikamente"
    },
    {
      "reference" : "MedicationStatement/1-AspirinCardio"
    }]
  },
  {
    "title" : "Befund",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100006",
        "display" : "findings"
      }],
      "text" : "Befund"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Zeitpunkt des Befundes: 12:25</p><table><tbody><tr><th>Blutdruck:</th><th>GCS:</th><th>Weiteres:</th></tr><tr><td>120/80 mmHg, gemessen am rechten Arm</td><td>Total 15: Augenöffnung spontan (4), verbale Antwort orientiert (5), motorische Reaktion befolgt Antweisungen (6)</td><td>Schmerz: 5</td></tr></tbody></table></div>"
    },
    "section" : [{
      "title" : "Circulation",
      "entry" : [{
        "reference" : "Observation/1-Blutdruck"
      }]
    },
    {
      "title" : "Disability",
      "entry" : [{
        "reference" : "Observation/1-GCSBefund"
      }]
    }]
  },
  {
    "title" : "Diagnosen",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100007",
        "display" : "diagnosis"
      }],
      "text" : "Diagnosen"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><tbody><tr><th>Verdachtsdiagnose:</th></tr><tr><td>Akuter transmuraler Myokardinfarkt der Vorderwand (ACS/STEMI VW)</td></tr></tbody></table></div>"
    },
    "entry" : [{
      "reference" : "Observation/1-Diagnose"
    }]
  },
  {
    "title" : "Massnahmen",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100008",
        "display" : "measures"
      }],
      "text" : "Massnahmen"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span>Sofortige Infusion gelegt und Verabreichung einer ersten Dosis von 2 Hüben Nitrolingual-Spray um 12:30.</span></div>"
    },
    "entry" : [{
      "reference" : "MedicationAdministration/1-Infusion"
    },
    {
      "reference" : "MedicationAdministration/1-Spray"
    }]
  },
  {
    "title" : "Todesfall",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100009",
        "display" : "death"
      }],
      "text" : "Todesfall"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span>-</span></div>"
    }
  },
  {
    "title" : "Transport",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100010",
        "display" : "transport"
      }],
      "text" : "Transport"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span>Fahrt mit Sondersignal ins USZ.</span></div>"
    }
  },
  {
    "title" : "Übergabe",
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1100011",
        "display" : "handover"
      }],
      "text" : "Übergabe"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><tbody><tr><th>GCS:</th><th>NACA:</th><th>Zustand:</th><th>Weiteres:</th></tr><tr><td>Total 15: Augenöffnung spontan (4), verbale Antwort orientiert (5), motorische Reaktion befolgt Antweisungen (6)</td><td>III</td><td>Zustand des Patienten hat sich im Verlaufe des Einsatzes verbessert</td><td>Schmerz: 4</td></tr></tbody></table><p>Übergabe an USZ mit Wertsachenbeutel mit Portemonnaie, Handy, Uhr, Schlüssel, Bargeld sowie Wertsachenverzeichnis.</p></div>"
    },
    "entry" : [{
      "reference" : "Observation/1-ZustandUebergabe"
    },
    {
      "reference" : "Observation/1-NACAUebergabe"
    },
    {
      "reference" : "Observation/1-GCSUebergabe"
    },
    {
      "reference" : "Practitioner/1-InformationRecipientSpitalarzt"
    },
    {
      "reference" : "Organization/1-InformationRecipientUSZ"
    }]
  },
  {
    "title" : "Kommentar",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "48767-8",
        "display" : "Annotation comment [Interpretation] Narrative"
      }],
      "text" : "Kommentar"
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span>-</span></div>"
    }
  }]
}

```
