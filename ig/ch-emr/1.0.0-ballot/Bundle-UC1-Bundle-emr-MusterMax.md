# UC1-Bundle-emr-MusterMax - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-Bundle-emr-MusterMax**

## Example Bundle: UC1-Bundle-emr-MusterMax



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "UC1-Bundle-emr-MusterMax",
  "meta" : {
    "lastUpdated" : "2026-06-02T08:00:00+02:00",
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:11111111-aaaa-4111-8111-111111111111"
  },
  "type" : "document",
  "timestamp" : "2026-06-02T08:00:00+02:00",
  "entry" : [{
    "fullUrl" : "http://fhir.ch/ig/emr/Composition/UC1-Composition-emr-MusterMax",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "UC1-Composition-emr-MusterMax",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"]
      },
      "language" : "de-CH",
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Composition_UC1-Composition-emr-MusterMax\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Composition UC1-Composition-emr-MusterMax</b></p><a name=\"UC1-Composition-emr-MusterMax\"> </a><a name=\"hcUC1-Composition-emr-MusterMax\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-composition.html\">CH Emergency Record Composition</a></p></div><p><b>identifier</b>: <a href=\"http://terminology.hl7.org/7.1.0/NamingSystem-uri.html\" title=\"As defined by RFC 3986 (http://www.ietf.org/rfc/rfc3986.txt)(with many schemes defined in many RFCs). For OIDs and UUIDs, use the URN form (urn:oid:(note: lowercase) and urn:uuid:). See http://www.ietf.org/rfc/rfc3001.txt and http://www.ietf.org/rfc/rfc4122.txt \r\n\r\nThis oid is used as an identifier II.root to indicate the the extension is an absolute URI (technically, an IRI). Typically, this is used for OIDs and GUIDs. Note that when this OID is used with OIDs and GUIDs, the II.extension should start with urn:oid or urn:uuid: \r\n\r\nNote that this OID is created to aid with interconversion between CDA and FHIR - FHIR uses urn:ietf:rfc:3986 as equivalent to this OID. URIs as identifiers appear more commonly in FHIR.\r\n\r\nThis OID may also be used in CD.codeSystem.\">Uniform Resource Identifier (URI)</a>/urn:uuid:11111111-aaaa-4111-8111-111111111111</p><p><b>status</b>: Final</p><p><b>type</b>: <span title=\"Codes:{http://loinc.org 60591-5}\">Patient summary Document</span></p><p><b>date</b>: 2026-06-02 08:00:00+0200</p><p><b>author</b>: <a href=\"PractitionerRole-UC1-PractitionerRole-Hausarzt.html\">PractitionerRole Physician</a></p><p><b>title</b>: Elektronischer Notfallpass — Muster Max</p><p><b>confidentiality</b>: normal</p></div>"
      },
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:11111111-aaaa-4111-8111-111111111111"
      },
      "status" : "final",
      "type" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "60591-5"
        }]
      },
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "date" : "2026-06-02T08:00:00+02:00",
      "author" : [{
        "reference" : "PractitionerRole/UC1-PractitionerRole-Hausarzt"
      }],
      "title" : "Elektronischer Notfallpass — Muster Max",
      "confidentiality" : "N",
      "_confidentiality" : {
        "extension" : [{
          "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
          "valueCodeableConcept" : {
            "coding" : [{
              "system" : "http://snomed.info/sct",
              "version" : "http://snomed.info/sct/2011000195101",
              "code" : "17621005"
            }]
          }
        }]
      },
      "section" : [{
        "title" : "Notfallkontakte",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "56864-2"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Muster Vreni (Ehefrau): +41 78 876 54 32, Kommunikationssprache: Deutsch</li></ul></div>"
        },
        "entry" : [{
          "reference" : "RelatedPerson/UC1-RelatedPerson-VreniMuster"
        }]
      },
      {
        "title" : "Behandelnde Gesundheitsfachperson",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "85847-2"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Dr. med. UC1 Hausarzt</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
        },
        {
          "reference" : "PractitionerRole/UC1-PractitionerRole-Hausarzt"
        }]
      },
      {
        "title" : "Reanimationsstatus",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "100822-6"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Reanimationsstatus folgt aus der ärztlichen Notanordnung 2024 und der Patientenverfügung 2022.</p></div>"
        },
        "emptyReason" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
            "code" : "unavailable",
            "display" : "Information not available"
          }]
        }
      },
      {
        "title" : "Medikation",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "10160-0"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Beloc Zok 50 mg (Metoprolol), 1-0-0.5-0 — Bluthochdruck</li><li>Plavix 75 mg (Clopidogrel), 1-0-0-0 — Prophylaxe Schlaganfall</li></ul></div>"
        },
        "entry" : [{
          "reference" : "MedicationStatement/UC1-MedicationStatement-BelocZok"
        },
        {
          "reference" : "MedicationStatement/UC1-MedicationStatement-Plavix"
        }]
      },
      {
        "title" : "Impfungen",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "11369-6"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Impfungen dokumentiert.</p></div>"
        },
        "emptyReason" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
            "code" : "unavailable",
            "display" : "Information not available"
          }]
        }
      },
      {
        "title" : "Allergien oder Unverträglichkeiten",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "48765-2"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Allergien bekannt.</p></div>"
        },
        "emptyReason" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
            "code" : "nilknown",
            "display" : "Nil Known"
          }]
        }
      },
      {
        "title" : "Risiken für Behandelnde",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "46467-7"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Risikofaktoren bekannt.</p></div>"
        },
        "emptyReason" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
            "code" : "unavailable",
            "display" : "Information not available"
          }]
        }
      },
      {
        "title" : "Probleme und Diagnosen",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "11450-4"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>2015 Koronare Herzkrankheit</li><li>2016 Hypertonie</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Condition/UC1-Condition-KoronareHerzkrankheit"
        },
        {
          "reference" : "Condition/UC1-Condition-Hypertonie"
        }]
      },
      {
        "title" : "Patientenverfügungen und Ärztliche Notfallanordnung",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "42348-3"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Ärztliche Notanordnung 2024 (EPD)</li><li>Patientenverfügung 2022 (Hausarzt)</li></ul></div>"
        },
        "entry" : [{
          "reference" : "DocumentReference/UC1-DocumentReference-Notanordnung"
        },
        {
          "reference" : "DocumentReference/UC1-DocumentReference-Patientenverfuegung"
        }]
      },
      {
        "title" : "Andere Dokumente",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "55108-5"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Schrittmacherausweis 2015 (EPD)</li></ul></div>"
        },
        "entry" : [{
          "reference" : "DocumentReference/UC1-DocumentReference-Schrittmacherausweis"
        }]
      },
      {
        "title" : "Implantate",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "46264-8"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Herzschrittmacher (implantiert 2015)</li></ul></div>"
        },
        "entry" : [{
          "reference" : "DeviceUseStatement/UC1-DeviceUseStatement-Pacemaker"
        }]
      },
      {
        "title" : "Schwangerschaft",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "10162-6"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Nicht zutreffend.</p></div>"
        },
        "emptyReason" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
            "code" : "notasked",
            "display" : "Not Asked"
          }]
        }
      },
      {
        "title" : "Kognitive Beeinträchtigungen",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "66610-7"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine bekannt.</p></div>"
        },
        "emptyReason" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
            "code" : "nilknown",
            "display" : "Nil Known"
          }]
        }
      },
      {
        "title" : "Physische Beeinträchtigungen",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "96386-8"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine bekannt.</p></div>"
        },
        "emptyReason" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
            "code" : "nilknown",
            "display" : "Nil Known"
          }]
        }
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Patient/UC1-Patient-MusterMax",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "UC1-Patient-MusterMax",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Patient_UC1-Patient-MusterMax\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient UC1-Patient-MusterMax</b></p><a name=\"UC1-Patient-MusterMax\"> </a><a name=\"hcUC1-Patient-MusterMax\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html\">CH IPS Patient</a></p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</p><hr/><table class=\"grid\"><tr><td style=\"background-color: #f3f5da\" title=\"Ways to contact the Patient\">Contact Detail</td><td colspan=\"3\">Bahnhofstrasse 1 Zürich 8001 CH </td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Language spoken\">Language:</td><td colspan=\"3\"><span title=\"Codes:{urn:ietf:bcp:47 de}\">German</span> (preferred)</td></tr></table></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
        "value" : "80756011234567890123"
      }],
      "name" : [{
        "use" : "official",
        "family" : "Muster",
        "given" : ["Max"]
      }],
      "gender" : "male",
      "birthDate" : "1964-01-01",
      "address" : [{
        "line" : ["Bahnhofstrasse 1"],
        "city" : "Zürich",
        "postalCode" : "8001",
        "country" : "CH"
      }],
      "communication" : [{
        "language" : {
          "coding" : [{
            "system" : "urn:ietf:bcp:47",
            "code" : "de"
          }]
        },
        "preferred" : true
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/RelatedPerson/UC1-RelatedPerson-VreniMuster",
    "resource" : {
      "resourceType" : "RelatedPerson",
      "id" : "UC1-RelatedPerson-VreniMuster",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"RelatedPerson_UC1-RelatedPerson-VreniMuster\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RelatedPerson UC1-RelatedPerson-VreniMuster</b></p><a name=\"UC1-RelatedPerson-VreniMuster\"> </a><a name=\"hcUC1-RelatedPerson-VreniMuster\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-relatedperson.html\">CH Emergency Record RelatedPerson</a></p></div><p><b>active</b>: true</p><p><b>patient</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>relationship</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v3-RoleCode WIFE}\">wife</span></p><p><b>name</b>: Vreni Muster (Official)</p><p><b>telecom</b>: <a href=\"tel:+41788765432\">+41 78 876 54 32</a></p><p><b>gender</b>: Female</p><h3>Communications</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Language</b></td><td><b>Preferred</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{urn:ietf:bcp:47 de}\">German</span></td><td>true</td></tr></table></div>"
      },
      "active" : true,
      "patient" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "relationship" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
          "code" : "WIFE",
          "display" : "wife"
        }]
      }],
      "name" : [{
        "use" : "official",
        "family" : "Muster",
        "given" : ["Vreni"]
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 78 876 54 32",
        "use" : "mobile",
        "rank" : 1
      }],
      "gender" : "female",
      "communication" : [{
        "language" : {
          "coding" : [{
            "system" : "urn:ietf:bcp:47",
            "code" : "de"
          }]
        },
        "preferred" : true
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Practitioner/UC1-Practitioner-Hausarzt",
    "resource" : {
      "resourceType" : "Practitioner",
      "id" : "UC1-Practitioner-Hausarzt",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"]
      },
      "language" : "de-CH",
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Practitioner_UC1-Practitioner-Hausarzt\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner UC1-Practitioner-Hausarzt</b></p><a name=\"UC1-Practitioner-Hausarzt\"> </a><a name=\"hcUC1-Practitioner-Hausarzt\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitioner.html\">CH IPS Practitioner</a></p></div><p><b>identifier</b>: <a href=\"http://fhir.ch/ig/ch-term/3.3.0/NamingSystem-gln.html\" title=\"Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the [GS1](https://www.gs1.ch/de/home) system, see [refdata](https://www.refdata.ch/).\">GLN</a>/7601000000019</p><p><b>name</b>: UC1 Hausarzt (Official)</p><h3>Qualifications</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Code</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 309343006}\">Arzt</span></td></tr></table></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601000000019"
      }],
      "name" : [{
        "use" : "official",
        "family" : "Hausarzt",
        "given" : ["UC1"],
        "prefix" : ["Dr. med."]
      }],
      "qualification" : [{
        "code" : {
          "coding" : [{
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/2011000195101",
            "code" : "309343006"
          }],
          "text" : "Arzt"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/PractitionerRole/UC1-PractitionerRole-Hausarzt",
    "resource" : {
      "resourceType" : "PractitionerRole",
      "id" : "UC1-PractitionerRole-Hausarzt",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_UC1-PractitionerRole-Hausarzt\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole UC1-PractitionerRole-Hausarzt</b></p><a name=\"UC1-PractitionerRole-Hausarzt\"> </a><a name=\"hcUC1-PractitionerRole-Hausarzt\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitionerrole.html\">CH IPS PractitionerRole</a></p></div><p><b>active</b>: true</p><p><b>practitioner</b>: <a href=\"Practitioner-UC1-Practitioner-Hausarzt.html\">Practitioner UC1 Hausarzt (official)</a></p><p><b>organization</b>: <a href=\"Organization-UC1-Organization-Hausarztpraxis.html\">Organization Hausarztpraxis UC1</a></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 309343006}\">Arzt</span></p><p><b>specialty</b>: <span title=\"Codes:{http://snomed.info/sct 419772000}\">Allgemeine Innere Medizin</span></p></div>"
      },
      "active" : true,
      "practitioner" : {
        "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
      },
      "organization" : {
        "reference" : "Organization/UC1-Organization-Hausarztpraxis"
      },
      "code" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "309343006"
        }],
        "text" : "Arzt"
      }],
      "specialty" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "419772000"
        }],
        "text" : "Allgemeine Innere Medizin"
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Organization/UC1-Organization-Hausarztpraxis",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "UC1-Organization-Hausarztpraxis",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_UC1-Organization-Hausarztpraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization UC1-Organization-Hausarztpraxis</b></p><a name=\"UC1-Organization-Hausarztpraxis\"> </a><a name=\"hcUC1-Organization-Hausarztpraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-organization.html\">CH IPS Organization</a></p></div><p><b>identifier</b>: <a href=\"http://fhir.ch/ig/ch-term/3.3.0/NamingSystem-gln.html\" title=\"Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the [GS1](https://www.gs1.ch/de/home) system, see [refdata](https://www.refdata.ch/).\">GLN</a>/7601000000026</p><p><b>active</b>: true</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 394802001}\">Allgemeine Innere Medizin</span></p><p><b>name</b>: Hausarztpraxis UC1</p></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601000000026"
      }],
      "active" : true,
      "type" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "394802001"
        }],
        "text" : "Allgemeine Innere Medizin"
      }],
      "name" : "Hausarztpraxis UC1"
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Condition/UC1-Condition-KoronareHerzkrankheit",
    "resource" : {
      "resourceType" : "Condition",
      "id" : "UC1-Condition-KoronareHerzkrankheit",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Condition_UC1-Condition-KoronareHerzkrankheit\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Condition UC1-Condition-KoronareHerzkrankheit</b></p><a name=\"UC1-Condition-KoronareHerzkrankheit\"> </a><a name=\"hcUC1-Condition-KoronareHerzkrankheit\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html\">CH IPS Condition</a></p></div><p><b>clinicalStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-clinical active}\">Active</span></p><p><b>verificationStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-ver-status confirmed}\">Confirmed</span></p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-category problem-list-item}\">Problem List Item</span></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 53741008}\">Coronary arteriosclerosis</span></p><p><b>subject</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>onset</b>: 2015</p><p><b>recordedDate</b>: 2015-01-01</p><p><b>recorder</b>: <a href=\"Practitioner-UC1-Practitioner-Hausarzt.html\">Practitioner UC1 Hausarzt (official)</a></p></div>"
      },
      "clinicalStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
          "code" : "active"
        }]
      },
      "verificationStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
          "code" : "confirmed"
        }]
      },
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "53741008"
        }]
      },
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "onsetDateTime" : "2015",
      "recordedDate" : "2015-01-01",
      "recorder" : {
        "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Condition/UC1-Condition-Hypertonie",
    "resource" : {
      "resourceType" : "Condition",
      "id" : "UC1-Condition-Hypertonie",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Condition_UC1-Condition-Hypertonie\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Condition UC1-Condition-Hypertonie</b></p><a name=\"UC1-Condition-Hypertonie\"> </a><a name=\"hcUC1-Condition-Hypertonie\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html\">CH IPS Condition</a></p></div><p><b>clinicalStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-clinical active}\">Active</span></p><p><b>verificationStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-ver-status confirmed}\">Confirmed</span></p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-category problem-list-item}\">Problem List Item</span></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 38341003}\">High blood pressure</span></p><p><b>subject</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>onset</b>: 2016</p><p><b>recordedDate</b>: 2016-01-01</p><p><b>recorder</b>: <a href=\"Practitioner-UC1-Practitioner-Hausarzt.html\">Practitioner UC1 Hausarzt (official)</a></p></div>"
      },
      "clinicalStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
          "code" : "active"
        }]
      },
      "verificationStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
          "code" : "confirmed"
        }]
      },
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "38341003"
        }]
      },
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "onsetDateTime" : "2016",
      "recordedDate" : "2016-01-01",
      "recorder" : {
        "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Medication/UC1-Medication-BelocZok",
    "resource" : {
      "resourceType" : "Medication",
      "id" : "UC1-Medication-BelocZok",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Medication_UC1-Medication-BelocZok\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Medication UC1-Medication-BelocZok</b></p><a name=\"UC1-Medication-BelocZok\"> </a><a name=\"hcUC1-Medication-BelocZok\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medication.html\">CH IPS Medication</a></p></div><p><b>code</b>: <span title=\"Codes:{urn:oid:2.51.1.1 7680521101498}, {http://www.whocc.no/atc C07AB02}\">Beloc Zok 50 mg (Metoprolol)</span></p><p><b>form</b>: <span title=\"Codes:{urn:oid:0.4.0.127.0.16.1.1.2.1 10221005}\">Retardtablette</span></p><p><b>amount</b>: 100 Tablette<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = '732936001')</span>/1 Packung<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code1681000175101 = '1681000175101')</span></p></div>"
      },
      "code" : {
        "coding" : [{
          "system" : "urn:oid:2.51.1.1",
          "code" : "7680521101498",
          "display" : "BELOC ZOK Ret Tabl 50 mg 100 Stk"
        },
        {
          "system" : "http://www.whocc.no/atc",
          "code" : "C07AB02",
          "display" : "metoprolol"
        }],
        "text" : "Beloc Zok 50 mg (Metoprolol)"
      },
      "form" : {
        "coding" : [{
          "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
          "code" : "10221005"
        }],
        "text" : "Retardtablette"
      },
      "amount" : {
        "numerator" : {
          "value" : 100,
          "unit" : "Tablette",
          "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
          "code" : "732936001"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Packung",
          "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
          "code" : "1681000175101"
        }
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/MedicationStatement/UC1-MedicationStatement-BelocZok",
    "resource" : {
      "resourceType" : "MedicationStatement",
      "id" : "UC1-MedicationStatement-BelocZok",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"MedicationStatement_UC1-MedicationStatement-BelocZok\"> </a><p class=\"res-header-id\"><b>Generated Narrative: MedicationStatement UC1-MedicationStatement-BelocZok</b></p><a name=\"UC1-MedicationStatement-BelocZok\"> </a><a name=\"hcUC1-MedicationStatement-BelocZok\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-medicationstatement.html\">CH Emergency Record Medication Statement</a></p></div><p><b>status</b>: Active</p><p><b>medication</b>: <a href=\"Medication-UC1-Medication-BelocZok.html\">Medication BELOC ZOK Ret Tabl 50 mg 100 Stk</a></p><p><b>subject</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>effective</b>: 2016-01-01 --&gt; (ongoing)</p><p><b>reasonReference</b>: <a href=\"Condition-UC1-Condition-Hypertonie.html\">Condition High blood pressure</a></p><blockquote><p><b>dosage</b></p><p><b>sequence</b>: 1</p><p><b>timing</b>: Morning, Once</p><p><b>route</b>: <span title=\"Codes:{urn:oid:0.4.0.127.0.16.1.1.2.1 20053000}\">zum Einnehmen</span></p><h3>DoseAndRates</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Dose[x]</b></td></tr><tr><td style=\"display: none\">*</td><td>1 Tablette<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = '732936001')</span></td></tr></table></blockquote><blockquote><p><b>dosage</b></p><p><b>sequence</b>: 2</p><p><b>timing</b>: Evening, Once</p><h3>DoseAndRates</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Dose[x]</b></td></tr><tr><td style=\"display: none\">*</td><td>0.5 Halbe Tablette<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = '732936001')</span></td></tr></table></blockquote></div>"
      },
      "status" : "active",
      "medicationReference" : {
        "reference" : "Medication/UC1-Medication-BelocZok"
      },
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "effectivePeriod" : {
        "start" : "2016-01-01"
      },
      "reasonReference" : [{
        "reference" : "Condition/UC1-Condition-Hypertonie"
      }],
      "dosage" : [{
        "sequence" : 1,
        "timing" : {
          "repeat" : {
            "when" : ["MORN"]
          }
        },
        "route" : {
          "coding" : [{
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "20053000"
          }],
          "text" : "zum Einnehmen"
        },
        "doseAndRate" : [{
          "doseQuantity" : {
            "value" : 1,
            "unit" : "Tablette",
            "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
            "code" : "732936001"
          }
        }]
      },
      {
        "sequence" : 2,
        "timing" : {
          "repeat" : {
            "when" : ["EVE"]
          }
        },
        "doseAndRate" : [{
          "doseQuantity" : {
            "value" : 0.5,
            "unit" : "Halbe Tablette",
            "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
            "code" : "732936001"
          }
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Medication/UC1-Medication-Plavix",
    "resource" : {
      "resourceType" : "Medication",
      "id" : "UC1-Medication-Plavix",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Medication_UC1-Medication-Plavix\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Medication UC1-Medication-Plavix</b></p><a name=\"UC1-Medication-Plavix\"> </a><a name=\"hcUC1-Medication-Plavix\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medication.html\">CH IPS Medication</a></p></div><p><b>code</b>: <span title=\"Codes:{urn:oid:2.51.1.1 7680545090143}, {http://www.whocc.no/atc B01AC04}\">Plavix 75 mg (Clopidogrel)</span></p><p><b>form</b>: <span title=\"Codes:{urn:oid:0.4.0.127.0.16.1.1.2.1 10219000}\">Tablette</span></p><p><b>amount</b>: 28 Tablette<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = '732936001')</span>/1 Packung<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code1681000175101 = '1681000175101')</span></p></div>"
      },
      "code" : {
        "coding" : [{
          "system" : "urn:oid:2.51.1.1",
          "code" : "7680545090143",
          "display" : "PLAVIX Tabl 75 mg 28 Stk"
        },
        {
          "system" : "http://www.whocc.no/atc",
          "code" : "B01AC04",
          "display" : "clopidogrel"
        }],
        "text" : "Plavix 75 mg (Clopidogrel)"
      },
      "form" : {
        "coding" : [{
          "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
          "code" : "10219000"
        }],
        "text" : "Tablette"
      },
      "amount" : {
        "numerator" : {
          "value" : 28,
          "unit" : "Tablette",
          "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
          "code" : "732936001"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Packung",
          "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
          "code" : "1681000175101"
        }
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/MedicationStatement/UC1-MedicationStatement-Plavix",
    "resource" : {
      "resourceType" : "MedicationStatement",
      "id" : "UC1-MedicationStatement-Plavix",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"MedicationStatement_UC1-MedicationStatement-Plavix\"> </a><p class=\"res-header-id\"><b>Generated Narrative: MedicationStatement UC1-MedicationStatement-Plavix</b></p><a name=\"UC1-MedicationStatement-Plavix\"> </a><a name=\"hcUC1-MedicationStatement-Plavix\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-medicationstatement.html\">CH Emergency Record Medication Statement</a></p></div><p><b>status</b>: Active</p><p><b>medication</b>: <a href=\"Medication-UC1-Medication-Plavix.html\">Medication PLAVIX Tabl 75 mg 28 Stk</a></p><p><b>subject</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>effective</b>: 2015-06-01 --&gt; (ongoing)</p><p><b>reasonCode</b>: <span title=\"Codes:\">Prophylaxe Schlaganfall</span></p><blockquote><p><b>dosage</b></p><p><b>sequence</b>: 1</p><p><b>timing</b>: Morning, Once</p><p><b>route</b>: <span title=\"Codes:{urn:oid:0.4.0.127.0.16.1.1.2.1 20053000}\">zum Einnehmen</span></p><h3>DoseAndRates</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Dose[x]</b></td></tr><tr><td style=\"display: none\">*</td><td>1 Tablette<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = '732936001')</span></td></tr></table></blockquote></div>"
      },
      "status" : "active",
      "medicationReference" : {
        "reference" : "Medication/UC1-Medication-Plavix"
      },
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "effectivePeriod" : {
        "start" : "2015-06-01"
      },
      "reasonCode" : [{
        "text" : "Prophylaxe Schlaganfall"
      }],
      "dosage" : [{
        "sequence" : 1,
        "timing" : {
          "repeat" : {
            "when" : ["MORN"]
          }
        },
        "route" : {
          "coding" : [{
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "20053000"
          }],
          "text" : "zum Einnehmen"
        },
        "doseAndRate" : [{
          "doseQuantity" : {
            "value" : 1,
            "unit" : "Tablette",
            "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
            "code" : "732936001"
          }
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Device/UC1-Device-Pacemaker",
    "resource" : {
      "resourceType" : "Device",
      "id" : "UC1-Device-Pacemaker",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Device_UC1-Device-Pacemaker\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Device UC1-Device-Pacemaker</b></p><a name=\"UC1-Device-Pacemaker\"> </a><a name=\"hcUC1-Device-Pacemaker\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-device.html\">CH Emergency Record Device</a></p></div><h3>UdiCarriers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>DeviceIdentifier</b></td><td><b>Issuer</b></td><td><b>Jurisdiction</b></td><td><b>CarrierHRF</b></td><td><b>EntryType</b></td></tr><tr><td style=\"display: none\">*</td><td>00845678901234</td><td><a href=\"http://hl7.org/fhir/NamingSystem/gs1-di\">http://hl7.org/fhir/NamingSystem/gs1-di</a></td><td><a href=\"http://hl7.org/fhir/NamingSystem/eu-ec-udi\">http://hl7.org/fhir/NamingSystem/eu-ec-udi</a></td><td>(01)00845678901234(17)301231(10)PM2015A(21)MM2015PM001</td><td>Manual</td></tr></table><p><b>status</b>: Active</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 14106009}\">Cardiac pacemaker</span></p><p><b>patient</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>safety</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-emr/CodeSystem/ch-emr-mri-safety-status-cs mr-conditional}\">MR Conditional</span></p></div>"
      },
      "udiCarrier" : [{
        "deviceIdentifier" : "00845678901234",
        "issuer" : "http://hl7.org/fhir/NamingSystem/gs1-di",
        "jurisdiction" : "http://hl7.org/fhir/NamingSystem/eu-ec-udi",
        "carrierHRF" : "(01)00845678901234(17)301231(10)PM2015A(21)MM2015PM001",
        "entryType" : "manual"
      }],
      "status" : "active",
      "type" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "14106009"
        }]
      },
      "patient" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "safety" : [{
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-emr/CodeSystem/ch-emr-mri-safety-status-cs",
          "code" : "mr-conditional",
          "display" : "MR Conditional"
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/DeviceUseStatement/UC1-DeviceUseStatement-Pacemaker",
    "resource" : {
      "resourceType" : "DeviceUseStatement",
      "id" : "UC1-DeviceUseStatement-Pacemaker",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"DeviceUseStatement_UC1-DeviceUseStatement-Pacemaker\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DeviceUseStatement UC1-DeviceUseStatement-Pacemaker</b></p><a name=\"UC1-DeviceUseStatement-Pacemaker\"> </a><a name=\"hcUC1-DeviceUseStatement-Pacemaker\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-deviceusestatement.html\">CH Emergency Record Device Use Statement</a></p></div><p><b>status</b>: Active</p><p><b>subject</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>timing</b>: 2015-06-15</p><p><b>recordedOn</b>: 2015-06-15</p><p><b>device</b>: <a href=\"Device-UC1-Device-Pacemaker.html\">Device: status = active; type = Cardiac pacemaker; safety = MR Conditional</a></p><p><b>bodySite</b>: <span title=\"Codes:{http://snomed.info/sct 80891009}\">Heart</span></p></div>"
      },
      "status" : "active",
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "timingDateTime" : "2015-06-15",
      "recordedOn" : "2015-06-15",
      "device" : {
        "reference" : "Device/UC1-Device-Pacemaker"
      },
      "bodySite" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "80891009"
        }]
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/DocumentReference/UC1-DocumentReference-Notanordnung",
    "resource" : {
      "resourceType" : "DocumentReference",
      "id" : "UC1-DocumentReference-Notanordnung",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"DocumentReference_UC1-DocumentReference-Notanordnung\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DocumentReference UC1-DocumentReference-Notanordnung</b></p><a name=\"UC1-DocumentReference-Notanordnung\"> </a><a name=\"hcUC1-DocumentReference-Notanordnung\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-documentreference-advance-directive.html\">CH Emergency Record Advance Directive DocumentReference</a></p></div><p><b>status</b>: Current</p><p><b>type</b>: <span title=\"Codes:{http://loinc.org 93037-0}\">Portable medical order form</span></p><p><b>category</b>: <span title=\"Codes:{http://snomed.info/sct 371538006}\">Advance directive report</span></p><p><b>subject</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>date</b>: 2024-01-15 09:00:00+0100</p><p><b>author</b>: <a href=\"Practitioner-UC1-Practitioner-Hausarzt.html\">Practitioner UC1 Hausarzt (official)</a></p><p><b>description</b>: Ärztliche Notanordnung</p><blockquote><p><b>content</b></p><h3>Attachments</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>ContentType</b></td><td><b>Url</b></td></tr><tr><td style=\"display: none\">*</td><td>application/pdf</td><td><a href=\"https://example.org/documents/UC1-Notanordnung.pdf\">https://example.org/documents/UC1-Notanordnung.pdf</a></td></tr></table></blockquote></div>"
      },
      "status" : "current",
      "type" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "93037-0"
        }]
      },
      "category" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "371538006"
        }]
      }],
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "date" : "2024-01-15T09:00:00+01:00",
      "author" : [{
        "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
      }],
      "description" : "Ärztliche Notanordnung",
      "content" : [{
        "attachment" : {
          "contentType" : "application/pdf",
          "url" : "https://example.org/documents/UC1-Notanordnung.pdf"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/DocumentReference/UC1-DocumentReference-Patientenverfuegung",
    "resource" : {
      "resourceType" : "DocumentReference",
      "id" : "UC1-DocumentReference-Patientenverfuegung",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"DocumentReference_UC1-DocumentReference-Patientenverfuegung\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DocumentReference UC1-DocumentReference-Patientenverfuegung</b></p><a name=\"UC1-DocumentReference-Patientenverfuegung\"> </a><a name=\"hcUC1-DocumentReference-Patientenverfuegung\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-documentreference-advance-directive.html\">CH Emergency Record Advance Directive DocumentReference</a></p></div><p><b>status</b>: Current</p><p><b>type</b>: <span title=\"Codes:{http://loinc.org 75320-2}\">Advance directive</span></p><p><b>category</b>: <span title=\"Codes:{http://snomed.info/sct 1264561001}\">Living will (record artifact)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>date</b>: 2022-06-01 10:00:00+0200</p><p><b>author</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>description</b>: Patientenverfügung beim Hausarzt hinterlegt</p><blockquote><p><b>content</b></p><h3>Attachments</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>ContentType</b></td><td><b>Url</b></td></tr><tr><td style=\"display: none\">*</td><td>application/pdf</td><td><a href=\"https://example.org/documents/UC1-Patientenverfuegung.pdf\">https://example.org/documents/UC1-Patientenverfuegung.pdf</a></td></tr></table></blockquote></div>"
      },
      "status" : "current",
      "type" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "75320-2"
        }]
      },
      "category" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "1264561001"
        }]
      }],
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "date" : "2022-06-01T10:00:00+02:00",
      "author" : [{
        "reference" : "Patient/UC1-Patient-MusterMax"
      }],
      "description" : "Patientenverfügung beim Hausarzt hinterlegt",
      "content" : [{
        "attachment" : {
          "contentType" : "application/pdf",
          "url" : "https://example.org/documents/UC1-Patientenverfuegung.pdf"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/DocumentReference/UC1-DocumentReference-Schrittmacherausweis",
    "resource" : {
      "resourceType" : "DocumentReference",
      "id" : "UC1-DocumentReference-Schrittmacherausweis",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"DocumentReference_UC1-DocumentReference-Schrittmacherausweis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DocumentReference UC1-DocumentReference-Schrittmacherausweis</b></p><a name=\"UC1-DocumentReference-Schrittmacherausweis\"> </a><a name=\"hcUC1-DocumentReference-Schrittmacherausweis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-documentreference.html\">CH Emergency Record DocumentReference</a></p></div><p><b>status</b>: Current</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 422735006}\">Summary clinical document (record artifact)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-Patient-MusterMax.html\">Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)</a></p><p><b>date</b>: 2015-06-15 11:00:00+0200</p><p><b>author</b>: <a href=\"Practitioner-UC1-Practitioner-Hausarzt.html\">Practitioner UC1 Hausarzt (official)</a></p><p><b>description</b>: Schrittmacherausweis</p><blockquote><p><b>content</b></p><h3>Attachments</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>ContentType</b></td><td><b>Url</b></td></tr><tr><td style=\"display: none\">*</td><td>application/pdf</td><td><a href=\"https://example.org/documents/UC1-Schrittmacherausweis.pdf\">https://example.org/documents/UC1-Schrittmacherausweis.pdf</a></td></tr></table></blockquote></div>"
      },
      "status" : "current",
      "type" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "422735006"
        }]
      },
      "subject" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "date" : "2015-06-15T11:00:00+02:00",
      "author" : [{
        "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
      }],
      "description" : "Schrittmacherausweis",
      "content" : [{
        "attachment" : {
          "contentType" : "application/pdf",
          "url" : "https://example.org/documents/UC1-Schrittmacherausweis.pdf"
        }
      }]
    }
  }]
}

```
