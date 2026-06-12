# UC3-Bundle-emr-LaraKeller - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC3-Bundle-emr-LaraKeller**

## Example Bundle: UC3-Bundle-emr-LaraKeller



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "UC3-Bundle-emr-LaraKeller",
  "meta" : {
    "lastUpdated" : "2026-06-02T08:00:00+02:00",
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:33333333-aaaa-4333-8333-333333333333"
  },
  "type" : "document",
  "timestamp" : "2026-06-02T08:00:00+02:00",
  "entry" : [{
    "fullUrl" : "http://fhir.ch/ig/emr/Composition/UC3-Composition-emr-LaraKeller",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "UC3-Composition-emr-LaraKeller",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"]
      },
      "language" : "de-CH",
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Composition_UC3-Composition-emr-LaraKeller\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Composition UC3-Composition-emr-LaraKeller</b></p><a name=\"UC3-Composition-emr-LaraKeller\"> </a><a name=\"hcUC3-Composition-emr-LaraKeller\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-composition.html\">CH Emergency Record Composition</a></p></div><p><b>identifier</b>: <a href=\"http://terminology.hl7.org/7.1.0/NamingSystem-uri.html\" title=\"As defined by RFC 3986 (http://www.ietf.org/rfc/rfc3986.txt)(with many schemes defined in many RFCs). For OIDs and UUIDs, use the URN form (urn:oid:(note: lowercase) and urn:uuid:). See http://www.ietf.org/rfc/rfc3001.txt and http://www.ietf.org/rfc/rfc4122.txt \r\n\r\nThis oid is used as an identifier II.root to indicate the the extension is an absolute URI (technically, an IRI). Typically, this is used for OIDs and GUIDs. Note that when this OID is used with OIDs and GUIDs, the II.extension should start with urn:oid or urn:uuid: \r\n\r\nNote that this OID is created to aid with interconversion between CDA and FHIR - FHIR uses urn:ietf:rfc:3986 as equivalent to this OID. URIs as identifiers appear more commonly in FHIR.\r\n\r\nThis OID may also be used in CD.codeSystem.\">Uniform Resource Identifier (URI)</a>/urn:uuid:33333333-aaaa-4333-8333-333333333333</p><p><b>status</b>: Final</p><p><b>type</b>: <span title=\"Codes:{http://loinc.org 60591-5}\">Patient summary Document</span></p><p><b>date</b>: 2026-06-02 08:00:00+0200</p><p><b>author</b>: <a href=\"PractitionerRole-UC3-PractitionerRole-Hausarzt.html\">PractitionerRole Physician</a></p><p><b>title</b>: Elektronischer Notfallpass — Lara Keller</p><p><b>confidentiality</b>: normal</p></div>"
      },
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:33333333-aaaa-4333-8333-333333333333"
      },
      "status" : "final",
      "type" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "60591-5"
        }]
      },
      "subject" : {
        "reference" : "Patient/UC3-Patient-LaraKeller"
      },
      "date" : "2026-06-02T08:00:00+02:00",
      "author" : [{
        "reference" : "PractitionerRole/UC3-PractitionerRole-Hausarzt"
      }],
      "title" : "Elektronischer Notfallpass — Lara Keller",
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
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Margrit Keller (Mutter): +41 79 555 11 22</li></ul></div>"
        },
        "entry" : [{
          "reference" : "RelatedPerson/UC3-RelatedPerson-Mutter"
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
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Dr. med. UC3 Hausarzt</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Practitioner/UC3-Practitioner-Hausarzt"
        },
        {
          "reference" : "PractitionerRole/UC3-PractitionerRole-Hausarzt"
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
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Kein Reanimationsstatus erfasst.</p></div>"
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
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Marcoumar 3 mg (Phenprocoumon) — nach separater INR-gesteuerter Verordnung. Thromboembolieprophylaxe nach mechanischem Klappenersatz.</li></ul></div>"
        },
        "entry" : [{
          "reference" : "MedicationStatement/UC3-MedicationStatement-Marcoumar"
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
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>2024 Eisenmangelanämie</li><li>2008 Angeborener Herzfehler</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Condition/UC3-Condition-Eisenmangelanaemie"
        },
        {
          "reference" : "Condition/UC3-Condition-AngeborenerHerzfehler"
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
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Patientenverfügung hinterlegt.</p></div>"
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
        "title" : "Andere Dokumente",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "55108-5"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine zusätzlichen Dokumente hinterlegt.</p></div>"
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
        "title" : "Implantate",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "46264-8"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>2010 Aortenklappenprothese (mechanisch)</li></ul></div>"
        },
        "entry" : [{
          "reference" : "DeviceUseStatement/UC3-DeviceUseStatement-AorticValve"
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
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Schwangerschaft bekannt.</p></div>"
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
    "fullUrl" : "http://fhir.ch/ig/emr/Patient/UC3-Patient-LaraKeller",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "UC3-Patient-LaraKeller",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Patient_UC3-Patient-LaraKeller\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient UC3-Patient-LaraKeller</b></p><a name=\"UC3-Patient-LaraKeller\"> </a><a name=\"hcUC3-Patient-LaraKeller\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html\">CH IPS Patient</a></p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)</p><hr/><table class=\"grid\"><tr><td style=\"background-color: #f3f5da\" title=\"Ways to contact the Patient\">Contact Detail</td><td colspan=\"3\">Sonnenrain 7 Bern 3011 CH </td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Language spoken\">Language:</td><td colspan=\"3\"><span title=\"Codes:{urn:ietf:bcp:47 de}\">German</span> (preferred)</td></tr></table></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
        "value" : "80756013333333333333"
      }],
      "name" : [{
        "use" : "official",
        "family" : "Keller",
        "given" : ["Lara"]
      }],
      "gender" : "female",
      "birthDate" : "1992-09-30",
      "address" : [{
        "line" : ["Sonnenrain 7"],
        "city" : "Bern",
        "postalCode" : "3011",
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
    "fullUrl" : "http://fhir.ch/ig/emr/RelatedPerson/UC3-RelatedPerson-Mutter",
    "resource" : {
      "resourceType" : "RelatedPerson",
      "id" : "UC3-RelatedPerson-Mutter",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"RelatedPerson_UC3-RelatedPerson-Mutter\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RelatedPerson UC3-RelatedPerson-Mutter</b></p><a name=\"UC3-RelatedPerson-Mutter\"> </a><a name=\"hcUC3-RelatedPerson-Mutter\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-relatedperson.html\">CH Emergency Record RelatedPerson</a></p></div><p><b>active</b>: true</p><p><b>patient</b>: <a href=\"Patient-UC3-Patient-LaraKeller.html\">Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)</a></p><p><b>relationship</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v3-RoleCode MTH}\">mother</span></p><p><b>name</b>: Margrit Keller (Official)</p><p><b>telecom</b>: <a href=\"tel:+41795551122\">+41 79 555 11 22</a></p><p><b>gender</b>: Female</p><h3>Communications</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Language</b></td><td><b>Preferred</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{urn:ietf:bcp:47 de}\">German</span></td><td>true</td></tr></table></div>"
      },
      "active" : true,
      "patient" : {
        "reference" : "Patient/UC3-Patient-LaraKeller"
      },
      "relationship" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
          "code" : "MTH",
          "display" : "mother"
        }]
      }],
      "name" : [{
        "use" : "official",
        "family" : "Keller",
        "given" : ["Margrit"]
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 79 555 11 22",
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
    "fullUrl" : "http://fhir.ch/ig/emr/Practitioner/UC3-Practitioner-Hausarzt",
    "resource" : {
      "resourceType" : "Practitioner",
      "id" : "UC3-Practitioner-Hausarzt",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"]
      },
      "language" : "de-CH",
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Practitioner_UC3-Practitioner-Hausarzt\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner UC3-Practitioner-Hausarzt</b></p><a name=\"UC3-Practitioner-Hausarzt\"> </a><a name=\"hcUC3-Practitioner-Hausarzt\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitioner.html\">CH IPS Practitioner</a></p></div><p><b>identifier</b>: <a href=\"http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html\" title=\"Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the [GS1](https://www.gs1.ch/de/home) system, see [refdata](https://www.refdata.ch/).\">GLN</a>/7601000000057</p><p><b>name</b>: UC3 Hausarzt (Official)</p><h3>Qualifications</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Code</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 309343006}\">Arzt</span></td></tr></table></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601000000057"
      }],
      "name" : [{
        "use" : "official",
        "family" : "Hausarzt",
        "given" : ["UC3"],
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
    "fullUrl" : "http://fhir.ch/ig/emr/PractitionerRole/UC3-PractitionerRole-Hausarzt",
    "resource" : {
      "resourceType" : "PractitionerRole",
      "id" : "UC3-PractitionerRole-Hausarzt",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_UC3-PractitionerRole-Hausarzt\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole UC3-PractitionerRole-Hausarzt</b></p><a name=\"UC3-PractitionerRole-Hausarzt\"> </a><a name=\"hcUC3-PractitionerRole-Hausarzt\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitionerrole.html\">CH IPS PractitionerRole</a></p></div><p><b>active</b>: true</p><p><b>practitioner</b>: <a href=\"Practitioner-UC3-Practitioner-Hausarzt.html\">Practitioner UC3 Hausarzt (official)</a></p><p><b>organization</b>: <a href=\"Organization-UC3-Organization-Hausarztpraxis.html\">Organization Hausarztpraxis UC3</a></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 309343006}\">Arzt</span></p><p><b>specialty</b>: <span title=\"Codes:{http://snomed.info/sct 419772000}\">Allgemeine Innere Medizin</span></p></div>"
      },
      "active" : true,
      "practitioner" : {
        "reference" : "Practitioner/UC3-Practitioner-Hausarzt"
      },
      "organization" : {
        "reference" : "Organization/UC3-Organization-Hausarztpraxis"
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
    "fullUrl" : "http://fhir.ch/ig/emr/Organization/UC3-Organization-Hausarztpraxis",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "UC3-Organization-Hausarztpraxis",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_UC3-Organization-Hausarztpraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization UC3-Organization-Hausarztpraxis</b></p><a name=\"UC3-Organization-Hausarztpraxis\"> </a><a name=\"hcUC3-Organization-Hausarztpraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-organization.html\">CH IPS Organization</a></p></div><p><b>identifier</b>: <a href=\"http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html\" title=\"Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the [GS1](https://www.gs1.ch/de/home) system, see [refdata](https://www.refdata.ch/).\">GLN</a>/7601000000064</p><p><b>active</b>: true</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 394802001}\">Allgemeine Innere Medizin</span></p><p><b>name</b>: Hausarztpraxis UC3</p></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601000000064"
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
      "name" : "Hausarztpraxis UC3"
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Condition/UC3-Condition-Eisenmangelanaemie",
    "resource" : {
      "resourceType" : "Condition",
      "id" : "UC3-Condition-Eisenmangelanaemie",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Condition_UC3-Condition-Eisenmangelanaemie\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Condition UC3-Condition-Eisenmangelanaemie</b></p><a name=\"UC3-Condition-Eisenmangelanaemie\"> </a><a name=\"hcUC3-Condition-Eisenmangelanaemie\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html\">CH IPS Condition</a></p></div><p><b>clinicalStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-clinical active}\">Active</span></p><p><b>verificationStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-ver-status confirmed}\">Confirmed</span></p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-category problem-list-item}\">Problem List Item</span></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 87522002}\">Iron deficiency anemia</span></p><p><b>subject</b>: <a href=\"Patient-UC3-Patient-LaraKeller.html\">Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)</a></p><p><b>onset</b>: 2024</p><p><b>recordedDate</b>: 2024-01-01</p><p><b>recorder</b>: <a href=\"Practitioner-UC3-Practitioner-Hausarzt.html\">Practitioner UC3 Hausarzt (official)</a></p></div>"
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
          "code" : "87522002"
        }]
      },
      "subject" : {
        "reference" : "Patient/UC3-Patient-LaraKeller"
      },
      "onsetDateTime" : "2024",
      "recordedDate" : "2024-01-01",
      "recorder" : {
        "reference" : "Practitioner/UC3-Practitioner-Hausarzt"
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Condition/UC3-Condition-AngeborenerHerzfehler",
    "resource" : {
      "resourceType" : "Condition",
      "id" : "UC3-Condition-AngeborenerHerzfehler",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Condition_UC3-Condition-AngeborenerHerzfehler\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Condition UC3-Condition-AngeborenerHerzfehler</b></p><a name=\"UC3-Condition-AngeborenerHerzfehler\"> </a><a name=\"hcUC3-Condition-AngeborenerHerzfehler\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html\">CH IPS Condition</a></p></div><p><b>clinicalStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-clinical active}\">Active</span></p><p><b>verificationStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-ver-status confirmed}\">Confirmed</span></p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-category problem-list-item}\">Problem List Item</span></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 13213009}\">Congenital heart disease</span></p><p><b>subject</b>: <a href=\"Patient-UC3-Patient-LaraKeller.html\">Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)</a></p><p><b>onset</b>: 2008</p><p><b>recordedDate</b>: 2008-01-01</p></div>"
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
          "code" : "13213009"
        }]
      },
      "subject" : {
        "reference" : "Patient/UC3-Patient-LaraKeller"
      },
      "onsetDateTime" : "2008",
      "recordedDate" : "2008-01-01"
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Medication/UC3-Medication-Marcoumar",
    "resource" : {
      "resourceType" : "Medication",
      "id" : "UC3-Medication-Marcoumar",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Medication_UC3-Medication-Marcoumar\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Medication UC3-Medication-Marcoumar</b></p><a name=\"UC3-Medication-Marcoumar\"> </a><a name=\"hcUC3-Medication-Marcoumar\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medication.html\">CH IPS Medication</a></p></div><p><b>code</b>: <span title=\"Codes:{urn:oid:2.51.1.1 7680193950011}, {http://www.whocc.no/atc B01AA04}\">Marcoumar 3 mg (Phenprocoumon)</span></p><p><b>form</b>: <span title=\"Codes:{urn:oid:0.4.0.127.0.16.1.1.2.1 10219000}\">Tablette</span></p><p><b>amount</b>: 25 Tablette<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = '732936001')</span>/1 Packung<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code1681000175101 = '1681000175101')</span></p></div>"
      },
      "code" : {
        "coding" : [{
          "system" : "urn:oid:2.51.1.1",
          "code" : "7680193950011",
          "display" : "MARCOUMAR Tabl 3 mg Plast Fl 25 Stk"
        },
        {
          "system" : "http://www.whocc.no/atc",
          "code" : "B01AA04",
          "display" : "phenprocoumon"
        }],
        "text" : "Marcoumar 3 mg (Phenprocoumon)"
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
          "value" : 25,
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
    "fullUrl" : "http://fhir.ch/ig/emr/MedicationStatement/UC3-MedicationStatement-Marcoumar",
    "resource" : {
      "resourceType" : "MedicationStatement",
      "id" : "UC3-MedicationStatement-Marcoumar",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"MedicationStatement_UC3-MedicationStatement-Marcoumar\"> </a><p class=\"res-header-id\"><b>Generated Narrative: MedicationStatement UC3-MedicationStatement-Marcoumar</b></p><a name=\"UC3-MedicationStatement-Marcoumar\"> </a><a name=\"hcUC3-MedicationStatement-Marcoumar\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-medicationstatement.html\">CH Emergency Record Medication Statement</a></p></div><p><b>status</b>: Active</p><p><b>medication</b>: <a href=\"Medication-UC3-Medication-Marcoumar.html\">Medication MARCOUMAR Tabl 3 mg Plast Fl 25 Stk</a></p><p><b>subject</b>: <a href=\"Patient-UC3-Patient-LaraKeller.html\">Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)</a></p><p><b>effective</b>: 2010-04-01 --&gt; (ongoing)</p><p><b>reasonCode</b>: <span title=\"Codes:\">Thromboembolieprophylaxe nach mechanischem Klappenersatz</span></p><blockquote><p><b>dosage</b></p><p><b>sequence</b>: 1</p><p><b>text</b>: Dosierung gemäss separater INR-gesteuerter Verordnung.</p><p><b>timing</b>: Morning, Once</p><p><b>route</b>: <span title=\"Codes:{urn:oid:0.4.0.127.0.16.1.1.2.1 20053000}\">zum Einnehmen</span></p><h3>DoseAndRates</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Dose[x]</b></td></tr><tr><td style=\"display: none\">*</td><td>1 Tablette<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = '732936001')</span></td></tr></table></blockquote></div>"
      },
      "status" : "active",
      "medicationReference" : {
        "reference" : "Medication/UC3-Medication-Marcoumar"
      },
      "subject" : {
        "reference" : "Patient/UC3-Patient-LaraKeller"
      },
      "effectivePeriod" : {
        "start" : "2010-04-01"
      },
      "reasonCode" : [{
        "text" : "Thromboembolieprophylaxe nach mechanischem Klappenersatz"
      }],
      "dosage" : [{
        "sequence" : 1,
        "text" : "Dosierung gemäss separater INR-gesteuerter Verordnung.",
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
    "fullUrl" : "http://fhir.ch/ig/emr/Device/UC3-Device-AorticValve",
    "resource" : {
      "resourceType" : "Device",
      "id" : "UC3-Device-AorticValve",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Device_UC3-Device-AorticValve\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Device UC3-Device-AorticValve</b></p><a name=\"UC3-Device-AorticValve\"> </a><a name=\"hcUC3-Device-AorticValve\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-device.html\">CH Emergency Record Device</a></p></div><h3>UdiCarriers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>DeviceIdentifier</b></td><td><b>Issuer</b></td><td><b>Jurisdiction</b></td><td><b>CarrierHRF</b></td><td><b>EntryType</b></td></tr><tr><td style=\"display: none\">*</td><td>00845678902345</td><td><a href=\"http://hl7.org/fhir/NamingSystem/gs1-di\">http://hl7.org/fhir/NamingSystem/gs1-di</a></td><td><a href=\"http://hl7.org/fhir/NamingSystem/eu-ec-udi\">http://hl7.org/fhir/NamingSystem/eu-ec-udi</a></td><td>(01)00845678902345(17)301231(10)AV2010A(21)LK2010AV001</td><td>Manual</td></tr></table><p><b>status</b>: Active</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 84683006}\">Aortic valve prosthesis</span></p><p><b>patient</b>: <a href=\"Patient-UC3-Patient-LaraKeller.html\">Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)</a></p><p><b>safety</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-emr/CodeSystem/ch-emr-mri-safety-status-cs mr-conditional}\">MR Conditional</span></p></div>"
      },
      "udiCarrier" : [{
        "deviceIdentifier" : "00845678902345",
        "issuer" : "http://hl7.org/fhir/NamingSystem/gs1-di",
        "jurisdiction" : "http://hl7.org/fhir/NamingSystem/eu-ec-udi",
        "carrierHRF" : "(01)00845678902345(17)301231(10)AV2010A(21)LK2010AV001",
        "entryType" : "manual"
      }],
      "status" : "active",
      "type" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "84683006"
        }]
      },
      "patient" : {
        "reference" : "Patient/UC3-Patient-LaraKeller"
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
    "fullUrl" : "http://fhir.ch/ig/emr/DeviceUseStatement/UC3-DeviceUseStatement-AorticValve",
    "resource" : {
      "resourceType" : "DeviceUseStatement",
      "id" : "UC3-DeviceUseStatement-AorticValve",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"DeviceUseStatement_UC3-DeviceUseStatement-AorticValve\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DeviceUseStatement UC3-DeviceUseStatement-AorticValve</b></p><a name=\"UC3-DeviceUseStatement-AorticValve\"> </a><a name=\"hcUC3-DeviceUseStatement-AorticValve\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-deviceusestatement.html\">CH Emergency Record Device Use Statement</a></p></div><p><b>status</b>: Active</p><p><b>subject</b>: <a href=\"Patient-UC3-Patient-LaraKeller.html\">Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)</a></p><p><b>timing</b>: 2010-04-15</p><p><b>recordedOn</b>: 2010-04-15</p><p><b>device</b>: <a href=\"Device-UC3-Device-AorticValve.html\">Device: status = active; type = Aortic valve prosthesis; safety = MR Conditional</a></p><p><b>bodySite</b>: <span title=\"Codes:{http://snomed.info/sct 34202007}\">Aortic valve</span></p></div>"
      },
      "status" : "active",
      "subject" : {
        "reference" : "Patient/UC3-Patient-LaraKeller"
      },
      "timingDateTime" : "2010-04-15",
      "recordedOn" : "2010-04-15",
      "device" : {
        "reference" : "Device/UC3-Device-AorticValve"
      },
      "bodySite" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "34202007"
        }]
      }
    }
  }]
}

```
