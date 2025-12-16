# UC 1: Pregnancy Passport - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Pregnancy Passport**

## Example Bundle: UC 1: Pregnancy Passport



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "UC1-Document",
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609"
  },
  "type" : "document",
  "timestamp" : "2025-02-05T10:34:00+01:00",
  "entry" : [
    {
      "fullUrl" : "http://test.fhir.ch/r4/Composition/UC1-Composition",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "UC1-Composition",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Composition_UC1-Composition\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Composition UC1-Composition</b></p><a name=\"UC1-Composition\"> </a><a name=\"hcUC1-Composition\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>identifier</b>: <a href=\"http://terminology.hl7.org/5.3.0/NamingSystem-uri.html\" title=\"As defined by RFC 3986 (http://www.ietf.org/rfc/rfc3986.txt)(with many schemes defined in many RFCs). For OIDs and UUIDs, use the URN form (urn:oid:(note: lowercase) and urn:uuid:). See http://www.ietf.org/rfc/rfc3001.txt and http://www.ietf.org/rfc/rfc4122.txt \r\n\r\nThis oid is used as an identifier II.root to indicate the the extension is an absolute URI (technically, an IRI). Typically, this is used for OIDs and GUIDs. Note that when this OID is used with OIDs and GUIDs, the II.extension should start with urn:oid or urn:uuid: \r\n\r\nNote that this OID is created to aid with interconversion between CDA and FHIR - FHIR uses urn:ietf:rfc:3986 as equivalent to this OID. URIs as identifiers appear more commonly in FHIR.\r\n\r\nThis OID may also be used in CD.codeSystem.\">Uniform Resource Identifier (URI)</a>/urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609</p><p><b>status</b>: Final</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 736377005}\">Maternity care plan (record artifact)</span></p><p><b>date</b>: 2025-02-05 10:34:00+0100</p><p><b>author</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>title</b>: Schwangerschaftspass</p><p><b>confidentiality</b>: normal</p></div>"
        },
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609"
        },
        "status" : "final",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "736377005",
              "display" : "Maternity care plan (record artifact)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "date" : "2025-02-05T10:34:00+01:00",
        "author" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "title" : "Schwangerschaftspass",
        "confidentiality" : "N",
        "_confidentiality" : {
          "extension" : [
            {
              "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://snomed.info/sct",
                    "code" : "17621005",
                    "display" : "Normal (qualifier value)"
                  }
                ]
              }
            }
          ]
        },
        "section" : [
          {
            "title" : "Stammdaten",
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "86638-4",
                  "display" : "Patient demographic and administrative information panel [FPAR]"
                }
              ]
            },
            "section" : [
              {
                "title" : "Versicherung",
                "code" : {
                  "coding" : [
                    {
                      "system" : "http://loinc.org",
                      "code" : "35525-5",
                      "display" : "Clinical trial protocol Financing and insurance section"
                    }
                  ]
                },
                "text" : {
                  "status" : "additional",
                  "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p><b>Grundversicherung:</b> Sanitas</p><p><b>Zusatzversicherung:</b> Helsana</p></div>"
                },
                "entry" : [
                  {
                    "reference" : "Coverage/UC1-BasicInsurance"
                  },
                  {
                    "reference" : "Coverage/UC1-SupplementaryInsurance"
                  }
                ]
              },
              {
                "title" : "Elternteil",
                "code" : {
                  "coding" : [
                    {
                      "system" : "http://loinc.org",
                      "code" : "54136-7",
                      "display" : "Relationship to patient Family member"
                    }
                  ]
                },
                "text" : {
                  "status" : "additional",
                  "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p><b>Biologischer Vater:</b> Pierre Kinderlieb</p></div>"
                },
                "entry" : [
                  {
                    "reference" : "RelatedPerson/UC1-RelatedPerson-BiologicalFather"
                  }
                ]
              },
              {
                "title" : "Behandelnde Leistungserbringende",
                "code" : {
                  "coding" : [
                    {
                      "system" : "http://loinc.org",
                      "code" : "85847-2",
                      "display" : "Patient Care team information"
                    }
                  ]
                },
                "text" : {
                  "status" : "additional",
                  "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p><b>Gynäkologin:</b> Petra Sectionata, Frauenzimmer</p><p><b>Hausärztin/Hausarzt:</b> keine</p></div>"
                },
                "entry" : [
                  {
                    "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
                  }
                ]
              }
            ]
          },
          {
            "title" : "Serologische- & Laboruntersuchungen",
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "26436-6",
                  "display" : "Laboratory studies (set)"
                }
              ]
            },
            "section" : [
              {
                "title" : "Blutbank-Untersuchungen",
                "code" : {
                  "coding" : [
                    {
                      "system" : "http://loinc.org",
                      "code" : "18717-9",
                      "display" : "Blood bank studies (set)"
                    }
                  ]
                },
                "text" : {
                  "status" : "generated",
                  "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Blutgruppe: AB Rh+, 05.02.2025</li><li>Fetaler RhD: Rh+, 05.02.2025</li></ul></div>"
                },
                "entry" : [
                  {
                    "reference" : "Observation/UC1-BloodGroup-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-FetalRhD-20250205"
                  }
                ]
              },
              {
                "title" : "Klinische Chemie",
                "code" : {
                  "coding" : [
                    {
                      "system" : "http://loinc.org",
                      "code" : "18719-5",
                      "display" : "Chemistry studies (set)"
                    }
                  ]
                },
                "text" : {
                  "status" : "generated",
                  "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Kreatinin: 1.2 mg/dl (hoch), 05.02.2025</li><li>Harnsäure: 6.3 mg/dl (hoch), 05.02.2025</li><li>GFR: 54 ml/min, 05.02.2025</li><li>GGT: 43 U/l, 05.02.2025</li><li>GOT/AST/ASAT: 43 U/l, 05.02.2025</li><li>ALAT: 98 U/l, 05.02.2025</li><li>AP: 109 U/l, 05.02.2025</li><li>Glucose: 8.1 mmol/l, 05.02.2025</li></ul></div>"
                },
                "entry" : [
                  {
                    "reference" : "Observation/UC1-Creatinine-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-Urate-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-GFR-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-GGT-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-AST-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-ALAT-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-AP-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-GlucoseLab-20250205"
                  }
                ]
              },
              {
                "title" : "Hämatologie",
                "code" : {
                  "coding" : [
                    {
                      "system" : "http://loinc.org",
                      "code" : "18723-7",
                      "display" : "Hematology studies (set)"
                    }
                  ]
                },
                "text" : {
                  "status" : "generated",
                  "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Hkt: 46 %, 05.02.2025</li><li>Thrombozyten: 130, 05.02.2025</li></ul></div>"
                },
                "entry" : [
                  {
                    "reference" : "Observation/UC1-Hematocrit-20250205"
                  },
                  {
                    "reference" : "Observation/UC1-Platelets-20250205"
                  }
                ]
              }
            ]
          },
          {
            "title" : "Schwangerschaftsverlauf",
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "57059-8",
                  "display" : "Pregnancy visit summary note Narrative"
                }
              ]
            },
            "text" : {
              "status" : "generated",
              "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><b>Untersuchung vom 05.02.2025</b><ul><li>SSW: 37</li><li>Gewicht: 82.0 kg</li><li>Gewichtszunahme: 12.5 kg</li><li>Blutdruck: 160/100 mmHg</li><li>Urin: Zucker positiv, Nitrit positiv</li><li>Bauchumfang: 101 cm</li><li>Fundusstand: Rb/0</li><li>Vaginalbefund: bland</li><li>Kindsbewegung: normal</li><li>Herztöne: 162 /min</li><li>Kindslage: Schädellage</li></ul><b>Untersuchung vom 23.01.2025</b><ul><li>SSW: 35</li><li>Gewicht: 80.6 kg</li><li>Gewichtszunahme: 11.1 kg</li><li>Blutdruck: 120/80 mmHg</li></ul></div>"
            },
            "entry" : [
              {
                "reference" : "Encounter/UC1-EncounterMother20250205"
              },
              {
                "reference" : "Encounter/UC1-EncounterMother20250123"
              },
              {
                "reference" : "Encounter/UC1-EncounterChild20250205"
              },
              {
                "reference" : "Encounter/UC1-EncounterChild20250123"
              },
              {
                "reference" : "Observation/UC1-GestationalAgeInDays-20250205"
              },
              {
                "reference" : "Observation/UC1-GestationalAgeInDays-20250123"
              },
              {
                "reference" : "Observation/UC1-BodyWeight-20250205"
              },
              {
                "reference" : "Observation/UC1-BodyWeight-20250123"
              },
              {
                "reference" : "Observation/UC1-WeightGain-20250205"
              },
              {
                "reference" : "Observation/UC1-WeightGain-20250123"
              },
              {
                "reference" : "Observation/UC1-BloodPressure-20250205"
              },
              {
                "reference" : "Observation/UC1-UrineFinding-20250205"
              },
              {
                "reference" : "Observation/UC1-AbdominalCircumference-20250205"
              },
              {
                "reference" : "Observation/UC1-FundusHeight-20250205"
              },
              {
                "reference" : "Observation/UC1-VaginaFeature-20250205"
              },
              {
                "reference" : "Observation/UC1-BloodPressure-20250123"
              },
              {
                "reference" : "Observation/UC1-FetalMovement-20250205"
              },
              {
                "reference" : "Observation/UC1-FetalHeartFeature-20250205"
              },
              {
                "reference" : "Observation/UC1-FetalPosition-20250205"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Patient/UC1-KatrinKinderlieb",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "UC1-KatrinKinderlieb",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Patient_UC1-KatrinKinderlieb\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient UC1-KatrinKinderlieb</b></p><a name=\"UC1-KatrinKinderlieb\"> </a><a name=\"hcUC1-KatrinKinderlieb\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</p><hr/><table class=\"grid\"><tr><td style=\"background-color: #f3f5da\" title=\"Ways to contact the Patient\">Contact Detail</td><td colspan=\"3\"><ul><li><a href=\"mailto:katrin.kinderlieb@example.com\">katrin.kinderlieb@example.com</a></li><li><a href=\"tel:+41333333333\">+41 33 333 33 33</a></li><li><a href=\"tel:+41791234567\">+41 79 123 45 67</a></li><li><a href=\"tel:+41454545454\">+41 45 454 54 54</a></li><li>Musterstrasse 1 Zürich 8000 Schweiz </li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Language spoken\">Language:</td><td colspan=\"3\"><span title=\"Codes:{urn:ietf:bcp:47 de-CH}\">German (Switzerland)</span></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Nominated Contact: Emergency Contact\">Emergency Contact:</td><td colspan=\"3\"><ul><li>Pierre Kinderlieb </li><li><a href=\"tel:+41333333333\">+41 33 333 33 33</a></li><li><a href=\"tel:+41791112233\">+41 79 111 22 33</a></li><li><a href=\"tel:+41464646464\">+41 46 464 64 64</a></li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Nominated Contact: Emergency Contact\">Emergency Contact:</td><td colspan=\"3\"><ul><li>Anna Kinderlieb </li><li><a href=\"tel:+41888888888\">+41 88 888 88 88</a></li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Patient Links\">Links:</td><td colspan=\"3\"><ul><li>Also see: <a href=\"RelatedPerson-UC1-RelatedPerson-Mother.html\">RelatedPerson: relationship = Natural mother (person)</a></li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The pronouns to use when referring to an individual in verbal or written communication.\">Individual Pronouns:</td><td colspan=\"3\"><ul><li>value: <span title=\"Codes:{http://loinc.org LA29519-8}\">she/her/her/hers/herself</span></li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The patient's legal status as citizen of a country.\">Patient Citizenship:</td><td colspan=\"3\"><ul><li>code: <span title=\"Codes:{urn:iso:std:iso:3166 CH}\">Switzerland</span></li></ul></td></tr></table></div>"
        },
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "urn:iso:std:iso:3166",
                      "code" : "CH",
                      "display" : "Switzerland"
                    }
                  ]
                }
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/patient-citizenship"
          },
          {
            "extension" : [
              {
                "url" : "value",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "http://loinc.org",
                      "code" : "LA29519-8",
                      "display" : "she/her/her/hers/herself"
                    }
                  ]
                }
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/individual-pronouns"
          }
        ],
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
            "value" : "80756015090002647590"
          }
        ],
        "name" : [
          {
            "text" : "Katrin Emily Kinderlieb",
            "family" : "Kinderlieb",
            "given" : ["Katrin", "Emily"]
          }
        ],
        "telecom" : [
          {
            "system" : "email",
            "value" : "katrin.kinderlieb@example.com"
          },
          {
            "system" : "phone",
            "value" : "+41 33 333 33 33",
            "use" : "home"
          },
          {
            "system" : "phone",
            "value" : "+41 79 123 45 67",
            "use" : "mobile"
          },
          {
            "system" : "phone",
            "value" : "+41 45 454 54 54",
            "use" : "work"
          }
        ],
        "gender" : "female",
        "birthDate" : "1986-01-18",
        "address" : [
          {
            "line" : ["Musterstrasse 1"],
            "city" : "Zürich",
            "postalCode" : "8000",
            "country" : "Schweiz"
          }
        ],
        "contact" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/patient-contactPriority",
                "valuePositiveInt" : 1
              }
            ],
            "relationship" : [
              {
                "coding" : [
                  {
                    "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
                    "code" : "C",
                    "display" : "Emergency Contact"
                  }
                ]
              }
            ],
            "name" : {
              "family" : "Kinderlieb",
              "given" : ["Pierre"]
            },
            "telecom" : [
              {
                "system" : "phone",
                "value" : "+41 33 333 33 33",
                "use" : "home"
              },
              {
                "system" : "phone",
                "value" : "+41 79 111 22 33",
                "use" : "mobile"
              },
              {
                "system" : "phone",
                "value" : "+41 46 464 64 64",
                "use" : "work"
              }
            ]
          },
          {
            "relationship" : [
              {
                "coding" : [
                  {
                    "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
                    "code" : "C",
                    "display" : "Emergency Contact"
                  }
                ]
              }
            ],
            "name" : {
              "family" : "Kinderlieb",
              "given" : ["Anna"]
            },
            "telecom" : [
              {
                "system" : "phone",
                "value" : "+41 88 888 88 88",
                "use" : "home"
              }
            ]
          }
        ],
        "communication" : [
          {
            "language" : {
              "coding" : [
                {
                  "system" : "urn:ietf:bcp:47",
                  "code" : "de-CH",
                  "display" : "German (Switzerland)"
                }
              ]
            }
          }
        ],
        "link" : [
          {
            "other" : {
              "reference" : "RelatedPerson/UC1-RelatedPerson-Mother"
            },
            "type" : "seealso"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/RelatedPerson/UC1-RelatedPerson-Mother",
      "resource" : {
        "resourceType" : "RelatedPerson",
        "id" : "UC1-RelatedPerson-Mother",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"RelatedPerson_UC1-RelatedPerson-Mother\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RelatedPerson UC1-RelatedPerson-Mother</b></p><a name=\"UC1-RelatedPerson-Mother\"> </a><a name=\"hcUC1-RelatedPerson-Mother\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>patient</b>: <a href=\"Patient-UC1-Child.html\">Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)</a></p><p><b>relationship</b>: <span title=\"Codes:{http://snomed.info/sct 65656005}\">Natural mother (person)</span></p></div>"
        },
        "patient" : {
          "reference" : "Patient/UC1-Child"
        },
        "relationship" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "65656005",
                "display" : "Natural mother (person)"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Patient/UC1-Child",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "UC1-Child",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Patient_UC1-Child\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient UC1-Child</b></p><a name=\"UC1-Child\"> </a><a name=\"hcUC1-Child\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)</p><hr/></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PI",
                  "display" : "Patient internal identifier"
                }
              ]
            },
            "system" : "http://example.com/identifiers/child",
            "value" : "A"
          }
        ],
        "gender" : "female"
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Coverage/UC1-BasicInsurance",
      "resource" : {
        "resourceType" : "Coverage",
        "id" : "UC1-BasicInsurance",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Coverage_UC1-BasicInsurance\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Coverage UC1-BasicInsurance</b></p><a name=\"UC1-BasicInsurance\"> </a><a name=\"hcUC1-BasicInsurance\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>identifier</b>: Member Number/123456789</p><p><b>status</b>: Active</p><p><b>type</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor 1}\">Krankenversicherung (obligat.)</span></p><p><b>beneficiary</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>payor</b>: <a href=\"#hcUC1-BasicInsurance/Sanitas\">Organization Sanitas</a></p><hr/><blockquote><p class=\"res-header-id\"><b>Generated Narrative: Organization #Sanitas</b></p><a name=\"UC1-BasicInsurance/Sanitas\"> </a><a name=\"hcUC1-BasicInsurance/Sanitas\"> </a><p><b>name</b>: Sanitas</p></blockquote></div>"
        },
        "contained" : [
          {
            "resourceType" : "Organization",
            "id" : "Sanitas",
            "name" : "Sanitas"
          }
        ],
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "MB",
                  "display" : "Member Number"
                }
              ]
            },
            "system" : "http://example.com/identifiers/insurance-number",
            "value" : "123456789"
          }
        ],
        "status" : "active",
        "type" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor",
              "code" : "1",
              "display" : "Krankenversicherung (obligat.)"
            }
          ]
        },
        "beneficiary" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "payor" : [
          {
            "reference" : "#Sanitas"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Coverage/UC1-SupplementaryInsurance",
      "resource" : {
        "resourceType" : "Coverage",
        "id" : "UC1-SupplementaryInsurance",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Coverage_UC1-SupplementaryInsurance\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Coverage UC1-SupplementaryInsurance</b></p><a name=\"UC1-SupplementaryInsurance\"> </a><a name=\"hcUC1-SupplementaryInsurance\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>identifier</b>: Member Number/555555555</p><p><b>status</b>: Active</p><p><b>type</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor ZV}\">Zusatzversicherung</span></p><p><b>beneficiary</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>payor</b>: <a href=\"#hcUC1-SupplementaryInsurance/Helsana\">Organization Helsana</a></p><hr/><blockquote><p class=\"res-header-id\"><b>Generated Narrative: Organization #Helsana</b></p><a name=\"UC1-SupplementaryInsurance/Helsana\"> </a><a name=\"hcUC1-SupplementaryInsurance/Helsana\"> </a><p><b>name</b>: Helsana</p></blockquote></div>"
        },
        "contained" : [
          {
            "resourceType" : "Organization",
            "id" : "Helsana",
            "name" : "Helsana"
          }
        ],
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "MB",
                  "display" : "Member Number"
                }
              ]
            },
            "system" : "http://example.com/identifiers/insurance-number",
            "value" : "555555555"
          }
        ],
        "status" : "active",
        "type" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor",
              "code" : "ZV",
              "display" : "Zusatzversicherung"
            }
          ]
        },
        "beneficiary" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "payor" : [
          {
            "reference" : "#Helsana"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/RelatedPerson/UC1-RelatedPerson-BiologicalFather",
      "resource" : {
        "resourceType" : "RelatedPerson",
        "id" : "UC1-RelatedPerson-BiologicalFather",
        "language" : "de-CH",
        "text" : {
          "status" : "extensions",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"RelatedPerson_UC1-RelatedPerson-BiologicalFather\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RelatedPerson UC1-RelatedPerson-BiologicalFather</b></p><a name=\"UC1-RelatedPerson-BiologicalFather\"> </a><a name=\"hcUC1-RelatedPerson-BiologicalFather\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><blockquote><p><b>Patient Citizenship</b></p><ul><li>code: <span title=\"Codes:{urn:iso:std:iso:3166 CH}\">Switzerland</span></li></ul></blockquote><p><b>patient</b>: <a href=\"Patient-UC1-Child.html\">Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)</a></p><p><b>relationship</b>: <span title=\"Codes:{http://snomed.info/sct 9947008}\">Natural father (person)</span></p><p><b>name</b>: Pierre Kinderlieb </p><p><b>birthDate</b>: 1987-07-21</p><h3>Communications</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Language</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{urn:ietf:bcp:47 de-CH}\">German (Switzerland)</span></td></tr></table></div>"
        },
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCodeableConcept" : {
                  "coding" : [
                    {
                      "system" : "urn:iso:std:iso:3166",
                      "code" : "CH",
                      "display" : "Switzerland"
                    }
                  ]
                }
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/patient-citizenship"
          }
        ],
        "patient" : {
          "reference" : "Patient/UC1-Child"
        },
        "relationship" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "9947008",
                "display" : "Natural father (person)"
              }
            ]
          }
        ],
        "name" : [
          {
            "family" : "Kinderlieb",
            "given" : ["Pierre"]
          }
        ],
        "birthDate" : "1987-07-21",
        "communication" : [
          {
            "language" : {
              "coding" : [
                {
                  "system" : "urn:ietf:bcp:47",
                  "code" : "de-CH",
                  "display" : "German (Switzerland)"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/PractitionerRole/UC1-PetraSectionataAtFrauenzimmer",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "UC1-PetraSectionataAtFrauenzimmer",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"PractitionerRole_UC1-PetraSectionataAtFrauenzimmer\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole UC1-PetraSectionataAtFrauenzimmer</b></p><a name=\"UC1-PetraSectionataAtFrauenzimmer\"> </a><a name=\"hcUC1-PetraSectionataAtFrauenzimmer\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>practitioner</b>: <a href=\"Practitioner-UC1-PetraSectionata.html\">Practitioner Petra Sectionata </a></p><p><b>organization</b>: <a href=\"Organization-UC1-Frauenzimmer.html\">Organization Frauenzimmer</a></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 309343006}\">Arzt/Ärztin</span></p><p><b>specialty</b>: <span title=\"Codes:{urn:oid:2.16.756.5.30.1.127.3.5 1003}\">Gynäkologie und Geburtshilfe</span></p></div>"
        },
        "practitioner" : {
          "reference" : "Practitioner/UC1-PetraSectionata"
        },
        "organization" : {
          "reference" : "Organization/UC1-Frauenzimmer"
        },
        "code" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "309343006",
                "display" : "Arzt/Ärztin"
              }
            ]
          }
        ],
        "specialty" : [
          {
            "coding" : [
              {
                "system" : "urn:oid:2.16.756.5.30.1.127.3.5",
                "code" : "1003",
                "display" : "Gynäkologie und Geburtshilfe"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Practitioner/UC1-PetraSectionata",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "UC1-PetraSectionata",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Practitioner_UC1-PetraSectionata\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner UC1-PetraSectionata</b></p><a name=\"UC1-PetraSectionata\"> </a><a name=\"hcUC1-PetraSectionata\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7610000050719</p><p><b>name</b>: Petra Sectionata </p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7610000050719"
          }
        ],
        "name" : [
          {
            "family" : "Sectionata",
            "given" : ["Petra"],
            "prefix" : ["Dr. med."]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Organization/UC1-Frauenzimmer",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "UC1-Frauenzimmer",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Organization_UC1-Frauenzimmer\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization UC1-Frauenzimmer</b></p><a name=\"UC1-Frauenzimmer\"> </a><a name=\"hcUC1-Frauenzimmer\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>name</b>: Frauenzimmer</p><p><b>telecom</b>: <a href=\"mailto:frauenzimmer@example.com\">frauenzimmer@example.com</a>, <a href=\"tel:+41794444444\">+41 79 444 44 44</a>, <a href=\"tel:+41444444444\">+41 44 444 44 44</a></p><p><b>address</b>: Zimmergasse 1 Musterhausen 8888 Schweiz </p></div>"
        },
        "name" : "Frauenzimmer",
        "telecom" : [
          {
            "system" : "email",
            "value" : "frauenzimmer@example.com"
          },
          {
            "system" : "phone",
            "value" : "+41 79 444 44 44",
            "use" : "mobile"
          },
          {
            "system" : "phone",
            "value" : "+41 44 444 44 44",
            "use" : "work"
          }
        ],
        "address" : [
          {
            "line" : ["Zimmergasse 1"],
            "city" : "Musterhausen",
            "postalCode" : "8888",
            "country" : "Schweiz"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Organization/UC1-LaborPipette",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "UC1-LaborPipette",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Organization_UC1-LaborPipette\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization UC1-LaborPipette</b></p><a name=\"UC1-LaborPipette\"> </a><a name=\"hcUC1-LaborPipette\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>name</b>: Labor Pipette</p></div>"
        },
        "name" : "Labor Pipette"
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-BloodGroup-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-BloodGroup-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-BloodGroup-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-BloodGroup-20250205</b></p><a name=\"UC1-BloodGroup-20250205\"> </a><a name=\"hcUC1-BloodGroup-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 365636006}\">Finding of blood group (finding)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: <span title=\"Codes:{http://snomed.info/sct 278151004}\">Blood group AB Rh(D) positive (finding)</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "365636006",
              "display" : "Finding of blood group (finding)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "278151004",
              "display" : "Blood group AB Rh(D) positive (finding)"
            }
          ]
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-FetalRhD-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-FetalRhD-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-FetalRhD-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-FetalRhD-20250205</b></p><a name=\"UC1-FetalRhD-20250205\"> </a><a name=\"hcUC1-FetalRhD-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 77016-4}\">Fetal RhD antigen in Plasma cell-free DNA by MS.MALDI-TOF</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: <span title=\"Codes:{http://loinc.org LA22747-2}\">RhD positive</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "77016-4",
              "display" : "Fetal RhD antigen in Plasma cell-free DNA by MS.MALDI-TOF"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "LA22747-2",
              "display" : "RhD positive"
            }
          ]
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-Creatinine-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-Creatinine-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-Creatinine-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-Creatinine-20250205</b></p><a name=\"UC1-Creatinine-20250205\"> </a><a name=\"hcUC1-Creatinine-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 2160-0}\">Creatinine [Mass/volume] in Serum or Plasma</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 1.2 milligram per deciliter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemg/dL = 'mg/dL')</span></p><p><b>interpretation</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation H}\">High</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "2160-0",
              "display" : "Creatinine [Mass/volume] in Serum or Plasma"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 1.2,
          "unit" : "milligram per deciliter",
          "system" : "http://unitsofmeasure.org",
          "code" : "mg/dL"
        },
        "interpretation" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
                "code" : "H",
                "display" : "High"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-Urate-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-Urate-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-Urate-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-Urate-20250205</b></p><a name=\"UC1-Urate-20250205\"> </a><a name=\"hcUC1-Urate-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 3084-1}\">Urate [Mass/volume] in Serum or Plasma</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 6.3 milligram per deciliter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemg/dL = 'mg/dL')</span></p><p><b>interpretation</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation H}\">High</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "3084-1",
              "display" : "Urate [Mass/volume] in Serum or Plasma"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 6.3,
          "unit" : "milligram per deciliter",
          "system" : "http://unitsofmeasure.org",
          "code" : "mg/dL"
        },
        "interpretation" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
                "code" : "H",
                "display" : "High"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-GFR-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-GFR-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-GFR-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-GFR-20250205</b></p><a name=\"UC1-GFR-20250205\"> </a><a name=\"hcUC1-GFR-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 62238-1}\">Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI)/1.73 sq M</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 54 milliliter per minute per 1.73 square meter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemL/min/1.73.m2 = 'mL/min/1.73.m2')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "62238-1",
              "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI)/1.73 sq M"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 54,
          "unit" : "milliliter per minute per 1.73 square meter",
          "system" : "http://unitsofmeasure.org",
          "code" : "mL/min/1.73.m2"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-GGT-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-GGT-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-GGT-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-GGT-20250205</b></p><a name=\"UC1-GGT-20250205\"> </a><a name=\"hcUC1-GGT-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 2324-2}\">Gamma glutamyl transferase [Enzymatic activity/volume] in Serum or Plasma</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 43 enzyme unit per liter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codeU/L = 'U/L')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "2324-2",
              "display" : "Gamma glutamyl transferase [Enzymatic activity/volume] in Serum or Plasma"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 43,
          "unit" : "enzyme unit per liter",
          "system" : "http://unitsofmeasure.org",
          "code" : "U/L"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-AST-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-AST-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-AST-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-AST-20250205</b></p><a name=\"UC1-AST-20250205\"> </a><a name=\"hcUC1-AST-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 1920-8}\">Aspartate aminotransferase [Enzymatic activity/volume] in Serum or Plasma</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 43 enzyme unit per liter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codeU/L = 'U/L')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "1920-8",
              "display" : "Aspartate aminotransferase [Enzymatic activity/volume] in Serum or Plasma"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 43,
          "unit" : "enzyme unit per liter",
          "system" : "http://unitsofmeasure.org",
          "code" : "U/L"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-ALAT-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-ALAT-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-ALAT-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-ALAT-20250205</b></p><a name=\"UC1-ALAT-20250205\"> </a><a name=\"hcUC1-ALAT-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 1742-6}\">Alanine aminotransferase [Enzymatic activity/volume] in Serum or Plasma</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 98 enzyme unit per liter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codeU/L = 'U/L')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "1742-6",
              "display" : "Alanine aminotransferase [Enzymatic activity/volume] in Serum or Plasma"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 98,
          "unit" : "enzyme unit per liter",
          "system" : "http://unitsofmeasure.org",
          "code" : "U/L"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-AP-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-AP-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-AP-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-AP-20250205</b></p><a name=\"UC1-AP-20250205\"> </a><a name=\"hcUC1-AP-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 6768-6}\">Alkaline phosphatase [Enzymatic activity/volume] in Serum or Plasma</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 109 enzyme unit per liter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codeU/L = 'U/L')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "6768-6",
              "display" : "Alkaline phosphatase [Enzymatic activity/volume] in Serum or Plasma"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 109,
          "unit" : "enzyme unit per liter",
          "system" : "http://unitsofmeasure.org",
          "code" : "U/L"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-GlucoseLab-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-GlucoseLab-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-GlucoseLab-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-GlucoseLab-20250205</b></p><a name=\"UC1-GlucoseLab-20250205\"> </a><a name=\"hcUC1-GlucoseLab-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 14771-0}\">Fasting glucose [Moles/volume] in Serum or Plasma</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 8.1 millimole per liter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemmol/L = 'mmol/L')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "14771-0",
              "display" : "Fasting glucose [Moles/volume] in Serum or Plasma"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 8.1,
          "unit" : "millimole per liter",
          "system" : "http://unitsofmeasure.org",
          "code" : "mmol/L"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-Hematocrit-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-Hematocrit-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-Hematocrit-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-Hematocrit-20250205</b></p><a name=\"UC1-Hematocrit-20250205\"> </a><a name=\"hcUC1-Hematocrit-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 4544-3}\">Hematocrit [Volume Fraction] of Blood by Automated count</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 46 percent<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  code% = '%')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "4544-3",
              "display" : "Hematocrit [Volume Fraction] of Blood by Automated count"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 46,
          "unit" : "percent",
          "system" : "http://unitsofmeasure.org",
          "code" : "%"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-Platelets-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-Platelets-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-Platelets-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-Platelets-20250205</b></p><a name=\"UC1-Platelets-20250205\"> </a><a name=\"hcUC1-Platelets-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 777-3}\">Platelets [#/volume] in Blood by Automated count</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"Organization-UC1-LaborPipette.html\">Organization Labor Pipette</a></p><p><b>value</b>: 130 Thousands Per MicroLiter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  code10*3/uL = '10*3/uL')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "777-3",
              "display" : "Platelets [#/volume] in Blood by Automated count"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "Organization/UC1-LaborPipette"
          }
        ],
        "valueQuantity" : {
          "value" : 130,
          "unit" : "Thousands Per MicroLiter",
          "system" : "http://unitsofmeasure.org",
          "code" : "10*3/uL"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Encounter/UC1-EncounterMother20250205",
      "resource" : {
        "resourceType" : "Encounter",
        "id" : "UC1-EncounterMother20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Encounter_UC1-EncounterMother20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Encounter UC1-EncounterMother20250205</b></p><a name=\"UC1-EncounterMother20250205\"> </a><a name=\"hcUC1-EncounterMother20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Finished</p><p><b>class</b>: <a href=\"http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB\">ActCode: AMB</a> (ambulatory)</p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><h3>Participants</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Individual</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></td></tr></table><p><b>period</b>: 2025-02-05 --&gt; 2025-02-05</p></div>"
        },
        "status" : "finished",
        "class" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "AMB",
          "display" : "ambulatory"
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "participant" : [
          {
            "individual" : {
              "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
            }
          }
        ],
        "period" : {
          "start" : "2025-02-05",
          "end" : "2025-02-05"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Encounter/UC1-EncounterMother20250123",
      "resource" : {
        "resourceType" : "Encounter",
        "id" : "UC1-EncounterMother20250123",
        "language" : "de-CH",
        "text" : {
          "status" : "extensions",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Encounter_UC1-EncounterMother20250123\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Encounter UC1-EncounterMother20250123</b></p><a name=\"UC1-EncounterMother20250123\"> </a><a name=\"hcUC1-EncounterMother20250123\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>CH EPREG Extension: Examination Sequence</b>: 7</p><p><b>status</b>: Finished</p><p><b>class</b>: <a href=\"http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB\">ActCode: AMB</a> (ambulatory)</p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><h3>Participants</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Individual</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></td></tr></table><p><b>period</b>: 2025-01-23 --&gt; 2025-01-23</p></div>"
        },
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-ext-examination-sequence",
            "valuePositiveInt" : 7
          }
        ],
        "status" : "finished",
        "class" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "AMB",
          "display" : "ambulatory"
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "participant" : [
          {
            "individual" : {
              "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
            }
          }
        ],
        "period" : {
          "start" : "2025-01-23",
          "end" : "2025-01-23"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Encounter/UC1-EncounterChild20250205",
      "resource" : {
        "resourceType" : "Encounter",
        "id" : "UC1-EncounterChild20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Encounter_UC1-EncounterChild20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Encounter UC1-EncounterChild20250205</b></p><a name=\"UC1-EncounterChild20250205\"> </a><a name=\"hcUC1-EncounterChild20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Finished</p><p><b>class</b>: <a href=\"http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB\">ActCode: AMB</a> (ambulatory)</p><p><b>subject</b>: <a href=\"Patient-UC1-Child.html\">Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)</a></p><h3>Participants</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Individual</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></td></tr></table><p><b>period</b>: 2025-02-05 --&gt; 2025-02-05</p><p><b>partOf</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p></div>"
        },
        "status" : "finished",
        "class" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "AMB",
          "display" : "ambulatory"
        },
        "subject" : {
          "reference" : "Patient/UC1-Child"
        },
        "participant" : [
          {
            "individual" : {
              "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
            }
          }
        ],
        "period" : {
          "start" : "2025-02-05",
          "end" : "2025-02-05"
        },
        "partOf" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Encounter/UC1-EncounterChild20250123",
      "resource" : {
        "resourceType" : "Encounter",
        "id" : "UC1-EncounterChild20250123",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Encounter_UC1-EncounterChild20250123\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Encounter UC1-EncounterChild20250123</b></p><a name=\"UC1-EncounterChild20250123\"> </a><a name=\"hcUC1-EncounterChild20250123\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Finished</p><p><b>class</b>: <a href=\"http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB\">ActCode: AMB</a> (ambulatory)</p><p><b>subject</b>: <a href=\"Patient-UC1-Child.html\">Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)</a></p><h3>Participants</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Individual</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></td></tr></table><p><b>period</b>: 2025-01-23 --&gt; 2025-01-23</p><p><b>partOf</b>: <a href=\"Encounter-UC1-EncounterMother20250123.html\">Encounter: extension = 7; status = finished; class = ambulatory (ActCode#AMB); period = 2025-01-23 --&gt; 2025-01-23</a></p></div>"
        },
        "status" : "finished",
        "class" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "AMB",
          "display" : "ambulatory"
        },
        "subject" : {
          "reference" : "Patient/UC1-Child"
        },
        "participant" : [
          {
            "individual" : {
              "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
            }
          }
        ],
        "period" : {
          "start" : "2025-01-23",
          "end" : "2025-01-23"
        },
        "partOf" : {
          "reference" : "Encounter/UC1-EncounterMother20250123"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-GestationalAgeInDays-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-GestationalAgeInDays-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-GestationalAgeInDays-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-GestationalAgeInDays-20250205</b></p><a name=\"UC1-GestationalAgeInDays-20250205\"> </a><a name=\"hcUC1-GestationalAgeInDays-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 49052-4}\">Gestational age in days</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: 259 day<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  coded = 'd')</span></p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "49052-4",
              "display" : "Gestational age in days"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueQuantity" : {
          "value" : 259,
          "unit" : "day",
          "system" : "http://unitsofmeasure.org",
          "code" : "d"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-GestationalAgeInDays-20250123",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-GestationalAgeInDays-20250123",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-GestationalAgeInDays-20250123\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-GestationalAgeInDays-20250123</b></p><a name=\"UC1-GestationalAgeInDays-20250123\"> </a><a name=\"hcUC1-GestationalAgeInDays-20250123\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 49052-4}\">Gestational age in days</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250123.html\">Encounter: extension = 7; status = finished; class = ambulatory (ActCode#AMB); period = 2025-01-23 --&gt; 2025-01-23</a></p><p><b>effective</b>: 2025-01-23</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: 245 day<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  coded = 'd')</span></p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "49052-4",
              "display" : "Gestational age in days"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250123"
        },
        "effectiveDateTime" : "2025-01-23",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueQuantity" : {
          "value" : 245,
          "unit" : "day",
          "system" : "http://unitsofmeasure.org",
          "code" : "d"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-BodyWeight-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-BodyWeight-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-BodyWeight-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-BodyWeight-20250205</b></p><a name=\"UC1-BodyWeight-20250205\"> </a><a name=\"hcUC1-BodyWeight-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category vital-signs}\">Vital Signs</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 29463-7}\">Body weight</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: 82 kilogram<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codekg = 'kg')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "vital-signs",
                "display" : "Vital Signs"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "29463-7",
              "display" : "Body weight"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueQuantity" : {
          "value" : 82,
          "unit" : "kilogram",
          "system" : "http://unitsofmeasure.org",
          "code" : "kg"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-BodyWeight-20250123",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-BodyWeight-20250123",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-BodyWeight-20250123\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-BodyWeight-20250123</b></p><a name=\"UC1-BodyWeight-20250123\"> </a><a name=\"hcUC1-BodyWeight-20250123\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category vital-signs}\">Vital Signs</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 29463-7}\">Body weight</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250123.html\">Encounter: extension = 7; status = finished; class = ambulatory (ActCode#AMB); period = 2025-01-23 --&gt; 2025-01-23</a></p><p><b>effective</b>: 2025-01-23</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: 80.6 kilogram<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codekg = 'kg')</span></p></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "vital-signs",
                "display" : "Vital Signs"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "29463-7",
              "display" : "Body weight"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250123"
        },
        "effectiveDateTime" : "2025-01-23",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueQuantity" : {
          "value" : 80.6,
          "unit" : "kilogram",
          "system" : "http://unitsofmeasure.org",
          "code" : "kg"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-WeightGain-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-WeightGain-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-WeightGain-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-WeightGain-20250205</b></p><a name=\"UC1-WeightGain-20250205\"> </a><a name=\"hcUC1-WeightGain-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 816161008}\">Measured gestational weight gain (observable entity)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: 12.5 kilogram<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codekg = 'kg')</span></p><p><b>derivedFrom</b>: <a href=\"Observation-UC1-BodyWeight-20250205.html\">Observation Body weight</a></p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "816161008",
              "display" : "Measured gestational weight gain (observable entity)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueQuantity" : {
          "value" : 12.5,
          "unit" : "kilogram",
          "system" : "http://unitsofmeasure.org",
          "code" : "kg"
        },
        "derivedFrom" : [
          {
            "reference" : "Observation/UC1-BodyWeight-20250205"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-WeightGain-20250123",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-WeightGain-20250123",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-WeightGain-20250123\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-WeightGain-20250123</b></p><a name=\"UC1-WeightGain-20250123\"> </a><a name=\"hcUC1-WeightGain-20250123\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 816161008}\">Measured gestational weight gain (observable entity)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250123.html\">Encounter: extension = 7; status = finished; class = ambulatory (ActCode#AMB); period = 2025-01-23 --&gt; 2025-01-23</a></p><p><b>effective</b>: 2025-01-23</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: 11.1 kilogram<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codekg = 'kg')</span></p><p><b>derivedFrom</b>: <a href=\"Observation-UC1-BodyWeight-20250123.html\">Observation Body weight</a></p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "816161008",
              "display" : "Measured gestational weight gain (observable entity)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250123"
        },
        "effectiveDateTime" : "2025-01-23",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueQuantity" : {
          "value" : 11.1,
          "unit" : "kilogram",
          "system" : "http://unitsofmeasure.org",
          "code" : "kg"
        },
        "derivedFrom" : [
          {
            "reference" : "Observation/UC1-BodyWeight-20250123"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-BloodPressure-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-BloodPressure-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-BloodPressure-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-BloodPressure-20250205</b></p><a name=\"UC1-BloodPressure-20250205\"> </a><a name=\"hcUC1-BloodPressure-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category vital-signs}\">Vital Signs</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 85354-9}\">Blood pressure panel with all children optional</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 8480-6}\">Systolic blood pressure</span></p><p><b>value</b>: 160 millimeter of mercury<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemm[Hg] = 'mm[Hg]')</span></p></blockquote><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 8462-4}\">Diastolic blood pressure</span></p><p><b>value</b>: 100 millimeter of mercury<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemm[Hg] = 'mm[Hg]')</span></p></blockquote></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "vital-signs",
                "display" : "Vital Signs"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "85354-9",
              "display" : "Blood pressure panel with all children optional"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "component" : [
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "8480-6",
                  "display" : "Systolic blood pressure"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 160,
              "unit" : "millimeter of mercury",
              "system" : "http://unitsofmeasure.org",
              "code" : "mm[Hg]"
            }
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "8462-4",
                  "display" : "Diastolic blood pressure"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 100,
              "unit" : "millimeter of mercury",
              "system" : "http://unitsofmeasure.org",
              "code" : "mm[Hg]"
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-BloodPressure-20250123",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-BloodPressure-20250123",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-BloodPressure-20250123\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-BloodPressure-20250123</b></p><a name=\"UC1-BloodPressure-20250123\"> </a><a name=\"hcUC1-BloodPressure-20250123\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category vital-signs}\">Vital Signs</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 85354-9}\">Blood pressure panel with all children optional</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250123.html\">Encounter: extension = 7; status = finished; class = ambulatory (ActCode#AMB); period = 2025-01-23 --&gt; 2025-01-23</a></p><p><b>effective</b>: 2025-01-23</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 8480-6}\">Systolic blood pressure</span></p><p><b>value</b>: 120 millimeter of mercury<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemm[Hg] = 'mm[Hg]')</span></p></blockquote><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 8462-4}\">Diastolic blood pressure</span></p><p><b>value</b>: 80 millimeter of mercury<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemm[Hg] = 'mm[Hg]')</span></p></blockquote></div>"
        },
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "vital-signs",
                "display" : "Vital Signs"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "85354-9",
              "display" : "Blood pressure panel with all children optional"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250123"
        },
        "effectiveDateTime" : "2025-01-23",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "component" : [
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "8480-6",
                  "display" : "Systolic blood pressure"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 120,
              "unit" : "millimeter of mercury",
              "system" : "http://unitsofmeasure.org",
              "code" : "mm[Hg]"
            }
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "8462-4",
                  "display" : "Diastolic blood pressure"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 80,
              "unit" : "millimeter of mercury",
              "system" : "http://unitsofmeasure.org",
              "code" : "mm[Hg]"
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-UrineFinding-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-UrineFinding-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-UrineFinding-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-UrineFinding-20250205</b></p><a name=\"UC1-UrineFinding-20250205\"> </a><a name=\"hcUC1-UrineFinding-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 417597005}\">Urine dipstick test finding (finding)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 25428-4}\">Glucose [Presence] in Urine by Test strip</span></p><p><b>value</b>: Zucker positiv</p></blockquote><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 5802-4}\">Nitrite [Presence] in Urine by Test strip</span></p><p><b>value</b>: Nitrit positiv</p></blockquote></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "417597005",
              "display" : "Urine dipstick test finding (finding)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "component" : [
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "25428-4",
                  "display" : "Glucose [Presence] in Urine by Test strip"
                }
              ]
            },
            "valueString" : "Zucker positiv"
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "5802-4",
                  "display" : "Nitrite [Presence] in Urine by Test strip"
                }
              ]
            },
            "valueString" : "Nitrit positiv"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-AbdominalCircumference-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-AbdominalCircumference-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-AbdominalCircumference-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-AbdominalCircumference-20250205</b></p><a name=\"UC1-AbdominalCircumference-20250205\"> </a><a name=\"hcUC1-AbdominalCircumference-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 3941000175104}\">Birth abdominal circumference (observable entity)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: 160 centimeter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codecm = 'cm')</span></p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "3941000175104",
              "display" : "Birth abdominal circumference (observable entity)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueQuantity" : {
          "value" : 160,
          "unit" : "centimeter",
          "system" : "http://unitsofmeasure.org",
          "code" : "cm"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-FundusHeight-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-FundusHeight-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-FundusHeight-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-FundusHeight-20250205</b></p><a name=\"UC1-FundusHeight-20250205\"> </a><a name=\"hcUC1-FundusHeight-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364265003}\">Height of gravid uterus (observable entity)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: Rb/0</p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "364265003",
              "display" : "Height of gravid uterus (observable entity)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueString" : "Rb/0"
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-VaginaFeature-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-VaginaFeature-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-VaginaFeature-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-VaginaFeature-20250205</b></p><a name=\"UC1-VaginaFeature-20250205\"> </a><a name=\"hcUC1-VaginaFeature-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364230003}\">Vagina feature (observable entity)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-KatrinKinderlieb.html\">Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterMother20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: bland</p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "364230003",
              "display" : "Vagina feature (observable entity)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueString" : "bland"
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-FetalMovement-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-FetalMovement-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-FetalMovement-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-FetalMovement-20250205</b></p><a name=\"UC1-FetalMovement-20250205\"> </a><a name=\"hcUC1-FetalMovement-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 249040004}\">Fetal movement activity (observable entity)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-Child.html\">Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterChild20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: normal</p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "249040004",
              "display" : "Fetal movement activity (observable entity)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-Child"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterChild20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueString" : "normal"
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-FetalHeartFeature-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-FetalHeartFeature-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-FetalHeartFeature-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-FetalHeartFeature-20250205</b></p><a name=\"UC1-FetalHeartFeature-20250205\"> </a><a name=\"hcUC1-FetalHeartFeature-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364620002}\">Fetal heart feature (observable entity)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-Child.html\">Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterChild20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: 162 /min</p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "364620002",
              "display" : "Fetal heart feature (observable entity)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-Child"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterChild20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueString" : "162 /min"
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Observation/UC1-FetalPosition-20250205",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "UC1-FetalPosition-20250205",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_UC1-FetalPosition-20250205\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation UC1-FetalPosition-20250205</b></p><a name=\"UC1-FetalPosition-20250205\"> </a><a name=\"hcUC1-FetalPosition-20250205\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364607000}\">Position of fetus (observable entity)</span></p><p><b>subject</b>: <a href=\"Patient-UC1-Child.html\">Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)</a></p><p><b>encounter</b>: <a href=\"Encounter-UC1-EncounterChild20250205.html\">Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --&gt; 2025-02-05</a></p><p><b>effective</b>: 2025-02-05</p><p><b>performer</b>: <a href=\"PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.html\">PractitionerRole Arzt/Ärztin</a></p><p><b>value</b>: <span title=\"Codes:{http://snomed.info/sct 70028003}\">Schädellage</span></p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "364607000",
              "display" : "Position of fetus (observable entity)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/UC1-Child"
        },
        "encounter" : {
          "reference" : "Encounter/UC1-EncounterChild20250205"
        },
        "effectiveDateTime" : "2025-02-05",
        "performer" : [
          {
            "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "70028003",
              "display" : "Vertex presentation (finding)"
            }
          ],
          "text" : "Schädellage"
        }
      }
    }
  ]
}

```
