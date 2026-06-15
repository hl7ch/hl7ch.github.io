# 2b Einsatzprotokoll - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2b Einsatzprotokoll**

## Example Composition: 2b Einsatzprotokoll



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "2b-Einsatzprotokoll-Composition",
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:b4044742-ab2c-49f6-8151-0e2be5d3f923"
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
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "date" : "2016-12-10T13:40:00.000+01:00",
  "author" : [{
    "reference" : "Practitioner/1-SaniPetraMuster"
  },
  {
    "reference" : "PractitionerRole/1-SaniPetraMuster-PR"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><tbody><tr><th>Einsatz</th></tr><tr><td>Einsatzdatum</td><td>10.12.2016</td></tr><tr><td>Einsatznummer</td><td>S12345678</td></tr><tr><td>aufbietende Organisation</td><td>7601002156370 (SNZ)</td></tr><tr><td>augebotene Organisation</td><td>7601002156363 (Rettungsdienst Schutz &amp; Rettung Zürich)</td></tr><tr><td>Team</td><td>Petra Muster, GLN 7601003330434, Betreuerin / Hans Transportsanitäter, GLN 7601000028105, Betreuer</td></tr><tr><td>Einsatzort</td><td>wird 8050 Zürich, Sternen Oerlikon, Schaffhauserstr. 350</td></tr><tr><td>Zielort</td><td>USZ Notfall</td></tr></tbody></table><table><tbody><tr><th>Alarm</th><th>Status DP</th><th>Status 1</th><th>Status 2</th><th>Kontakt Patient</th><th>Status 3</th><th>Status 4</th><th>Status 5</th><th>Status 6</th></tr><tr><th id=\"alarm\">12.09</th><th id=\"disposition\">12.11</th><th id=\"rollout\">12.13</th><th id=\"arrivalonscene\">12.17</th><th id=\"arrivalpatient\">12.18</th><th id=\"departurefromscene\">12.48</th><th id=\"arrivalattarget\">12.54</th><th id=\"departurefromtarget\">13.25</th><th id=\"operationalreadiness\">13.40</th></tr></tbody></table></div>"
    },
    "entry" : [{
      "reference" : "Encounter/2-Einsatz"
    },
    {
      "reference" : "Observation/2-Alarm"
    },
    {
      "reference" : "Observation/2-Disposition"
    },
    {
      "reference" : "Observation/2-Rollout"
    },
    {
      "reference" : "Observation/2-ArrivalOnScene"
    },
    {
      "reference" : "Observation/2-ArrivalPatient"
    },
    {
      "reference" : "Observation/2-DepartureFromScene"
    },
    {
      "reference" : "Observation/2-ArrivalAtTarget"
    },
    {
      "reference" : "Observation/2b-DepartureFromTarget"
    },
    {
      "reference" : "Observation/2b-OperationalReadiness"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span>-</span></div>"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span>-</span></div>"
    }
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Breathing: Der Patient hat eine unauffällige Spontanatmung</p><p>Cardiology: Sein Puls ist tastbar, es liegt kein Herz-Kreislaufstillstand vor; Frequenz 84/Minute, Blutdruck 170/90, gemessen am rechten Arm</p><p>Temperatur 37.2 °C, die Augen zeigen eine deutliche Anisokorie vor</p><table><tbody><tr><th>Airways</th><td id=\"airways\">Die Atemwege sind nicht verlegt</td></tr><tr><th>GCS</th><td id=\"gcs1\">Total 9 Augenöffnung bei Ansprache (3), gibt Einzelworte von sich (3), Dekortikationsstarre (3)</td></tr><tr><th>AVPU</th><td id=\"avpu\">V (=reagiert auf laute Ansprache)</td></tr></tbody></table></div>"
    },
    "section" : [{
      "title" : "Airway",
      "entry" : [{
        "reference" : "Observation/2-AirwaysBefund"
      }]
    },
    {
      "title" : "Disability",
      "entry" : [{
        "reference" : "Observation/2-GCSBefund"
      },
      {
        "reference" : "Observation/2-AVPUBefund"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><tbody><tr><th>Verdachtsdiagnose</th></tr><tr><td id=\"diagnose1\">Stroke (I63)</td></tr></tbody></table></div>"
    },
    "entry" : [{
      "reference" : "Observation/2-Diagnose"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span>Infusion mit 500 ml Ringer. Der Patient wird liegend in den Rettungswagen verladen.</span></div>"
    }
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Schmerz 4</p><table><tbody><tr><th>GCS</th></tr><tr><td id=\"gcs2\">Total 10 Augenöffnung bei Ansprache (3), Konversationsfähig aber desorientiert (4), Dekortikationsstarre (3)</td></tr><tr><th>NACA</th></tr><tr><td id=\"naca\">NACA: III</td></tr><tr><th>Zustand</th></tr><tr><td id=\"statusdischarge\">der Zustand des Patienten hat sich im Verlauf des Einsatzes verbessert</td></tr></tbody></table><p>Übergabe an USZ Effekten sowie Wertsachenverzeichnis</p></div>"
    },
    "entry" : [{
      "reference" : "Observation/2-ZustandUebergabe"
    },
    {
      "reference" : "Observation/2-NACAUebergabe"
    },
    {
      "reference" : "Observation/2-GCSUebergabe"
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
