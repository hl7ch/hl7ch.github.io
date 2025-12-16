# UC 2: Pregnancy Passport - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Pregnancy Passport**

## Example Bundle: UC 2: Pregnancy Passport



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "UC2-Document",
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:658f9dd5-8034-4ba4-b7ce-d3f0f6ebb2a7"
  },
  "type" : "document",
  "timestamp" : "2025-03-27T14:11:00+01:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:7c4e431a-6222-475f-9593-764b79316afa",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "7c4e431a-6222-475f-9593-764b79316afa",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Composition_7c4e431a-6222-475f-9593-764b79316afa\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Composition 7c4e431a-6222-475f-9593-764b79316afa</b></p><a name=\"7c4e431a-6222-475f-9593-764b79316afa\"> </a><a name=\"hc7c4e431a-6222-475f-9593-764b79316afa\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>identifier</b>: <a href=\"http://terminology.hl7.org/5.3.0/NamingSystem-uri.html\" title=\"As defined by RFC 3986 (http://www.ietf.org/rfc/rfc3986.txt)(with many schemes defined in many RFCs). For OIDs and UUIDs, use the URN form (urn:oid:(note: lowercase) and urn:uuid:). See http://www.ietf.org/rfc/rfc3001.txt and http://www.ietf.org/rfc/rfc4122.txt \r\n\r\nThis oid is used as an identifier II.root to indicate the the extension is an absolute URI (technically, an IRI). Typically, this is used for OIDs and GUIDs. Note that when this OID is used with OIDs and GUIDs, the II.extension should start with urn:oid or urn:uuid: \r\n\r\nNote that this OID is created to aid with interconversion between CDA and FHIR - FHIR uses urn:ietf:rfc:3986 as equivalent to this OID. URIs as identifiers appear more commonly in FHIR.\r\n\r\nThis OID may also be used in CD.codeSystem.\">Uniform Resource Identifier (URI)</a>/urn:uuid:658f9dd5-8034-4ba4-b7ce-d3f0f6ebb2a7</p><p><b>status</b>: Final</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 736377005}\">Maternity care plan (record artifact)</span></p><p><b>date</b>: 2025-03-27 14:11:00+0100</p><p><b>author</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>title</b>: Schwangerschaftspass</p><p><b>confidentiality</b>: normal</p></div>"
        },
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:658f9dd5-8034-4ba4-b7ce-d3f0f6ebb2a7"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "date" : "2025-03-27T14:11:00+01:00",
        "author" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
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
                  "status" : "generated",
                  "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p><b>Gynäkologin:</b> Tanja Allesgut, Geburtsklinik 'Willkommen auf der Welt'</p><p><b>Hebamme:</b> Ruth Ohazwei, Geburtsklinik 'Willkommen auf der Welt'</p></div>"
                },
                "entry" : [
                  {
                    "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
                    "display" : "Tanja Allesgut @ Geburtsklinik"
                  },
                  {
                    "reference" : "urn:uuid:e1b736e3-10bb-41aa-8d17-c7ba28895880",
                    "display" : "Ruth Ohazwei @ Geburtsklinik"
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
                  "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Glucose: 3.9 mmol/l, 27.03.2025</li></ul></div>"
                },
                "entry" : [
                  {
                    "reference" : "urn:uuid:b9145a94-ea12-479b-a031-b07d4ac9f297",
                    "display" : "Glucose 3.9 mmol/l, 27.03.2025"
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
              "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><b>Untersuchung vom 27.03.2025</b><ul><li>SSW: 32</li><li>Gewicht: 65 kg</li><li>Blutdruck: 160/60 mmHg</li><li>Urin: bland</li><li>Fundusstand: Rb/2</li><li>Vaginalbefund: MM 5 cm</li><li>Kindsbewegung: schwach</li><li>Herztöne: 110 /min</li><li>Kindslage: Steisslage</li><li>Weitere Untersuchungen: BZ (Teststreifen Finger): 3.9 mmol/l</li></ul><b>Untersuchung vom 26.03.2025</b><ul><li>SSW: 32</li><li>Gewicht: 65.1 kg</li><li>Blutdruck: 122/83 mmHg</li><li>Kindslage: Steisslage</li><li>Weitere Untersuchungen: BZ (Teststreifen Finger): 4.7 mmol/l, Verdauung: Sodbrennen</li></ul></div>"
            },
            "entry" : [
              {
                "reference" : "urn:uuid:4b9ca365-383e-41c8-9bac-b3c79aea1c7e",
                "display" : "Weitere Untersuchungen: BZ 3.9 mmol/l, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:bbd6f1bc-1d87-4c90-a313-98bea06c3dfb",
                "display" : "Weitere Untersuchungen: BZ 4.7 mmol/l, 26.03.2025"
              },
              {
                "reference" : "urn:uuid:1ce882f2-953f-428e-a90b-a55271020fca",
                "display" : "Weitere Untersuchungen: Sodbrennen, 26.03.2025"
              },
              {
                "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
                "display" : "Untersuchung Mutter, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
                "display" : "Untersuchung Mutter, 26.03.2025"
              },
              {
                "reference" : "urn:uuid:833fd8f2-b75f-4dba-990f-6c46aa468d51",
                "display" : "Untersuchung Kind, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:22aeb067-85f9-4b3b-9301-161604005206",
                "display" : "Untersuchung Kind, 26.03.2025"
              },
              {
                "reference" : "urn:uuid:84869994-4348-4ad3-95ee-d9b0faf75dba",
                "display" : "SSW 32, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:2f167f2f-44f7-49e3-a970-d7f7a6573cd3",
                "display" : "SSW 32, 26.03.2025"
              },
              {
                "reference" : "urn:uuid:e1c73669-f935-47d1-9dcd-fab76a38bdb7",
                "display" : "Gewicht 65 kg, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:f339e056-53d6-4247-9226-5339123fbd14",
                "display" : "Gewicht 65 kg, 26.03.2025"
              },
              {
                "reference" : "urn:uuid:4268bd90-eff8-41f4-a7b4-2178dac0e470",
                "display" : "Blutdruck 160/60 mmHg, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:e949f912-fc27-4849-8632-09caad9fe897",
                "display" : "Blutdruck 122/83 mmHg, 26.03.2025"
              },
              {
                "reference" : "urn:uuid:2db81543-7bf1-4965-a75e-00400c62e78b",
                "display" : "Urin bland, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:6eafd07b-c40a-4864-874c-cfe2d5b222ed",
                "display" : "Fundusstand Rb/2, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:c9bba019-9ed9-4574-84e2-f7d302e8f5d0",
                "display" : "Vaginalbefund MM 5 cm, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:3e120206-7aa2-4ced-82c3-3704868e023f",
                "display" : "Kindsbewegung schwach, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:d0b53779-fde0-4780-9ff4-9ba2a4cf9393",
                "display" : "Herztöne 110 /min, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:a5c14df0-3dca-4530-a22a-072af14178b1",
                "display" : "Kindslage Steisslage, 27.03.2025"
              },
              {
                "reference" : "urn:uuid:4a907770-6665-4fb4-b186-afd0ddf48742",
                "display" : "Kindslage Steisslage, 26.03.2025"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "76c2c5aa-3d7f-438d-b23d-56ce827695fd",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Patient_76c2c5aa-3d7f-438d-b23d-56ce827695fd\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient 76c2c5aa-3d7f-438d-b23d-56ce827695fd</b></p><a name=\"76c2c5aa-3d7f-438d-b23d-56ce827695fd\"> </a><a name=\"hc76c2c5aa-3d7f-438d-b23d-56ce827695fd\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Fabienne Madeleine Babyglück Female, DoB: 1999-05-10 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756098765432100000)</p><hr/><table class=\"grid\"><tr><td style=\"background-color: #f3f5da\" title=\"Ways to contact the Patient\">Contact Detail</td><td colspan=\"3\"><ul><li><a href=\"mailto:fabienne.babyglueck@example.com\">fabienne.babyglueck@example.com</a></li><li><a href=\"tel:+41666666666\">+41 66 666 66 66</a></li><li><a href=\"tel:+41799876543\">+41 79 987 65 43</a></li><li><a href=\"tel:+41434343434\">+41 43 434 34 34</a></li><li>Mustergasse 1 Zürich 8000 Schweiz </li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Language spoken\">Language:</td><td colspan=\"3\"><span title=\"Codes:{urn:ietf:bcp:47 de-CH}\">German (Switzerland)</span></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Nominated Contact: guardian\">guardian:</td><td colspan=\"3\"><ul><li>Marius Beistand </li><li><a href=\"mailto:marius.beistand@example.com\">marius.beistand@example.com</a></li><li><a href=\"tel:+41999999999\">+41 99 999 99 99</a></li><li><a href=\"tel:+41797777777\">+41 79 777 77 77</a></li><li><a href=\"tel:+41888888888\">+41 88 888 88 88</a></li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Patient Links\">Links:</td><td colspan=\"3\"><ul><li>Also see: <a href=\"Bundle-UC2-Document.html#urn-uuid-67d0e290-21b9-4255-9182-5fe9f21cdbb4\">RelatedPerson Fabienne Babyglück</a></li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The pronouns to use when referring to an individual in verbal or written communication.\">Individual Pronouns:</td><td colspan=\"3\"><ul><li>value: <span title=\"Codes:{http://loinc.org LA29519-8}\">she/her/her/hers/herself</span></li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The patient's legal status as citizen of a country.\">Patient Citizenship:</td><td colspan=\"3\"><ul><li>code: <span title=\"Codes:{urn:iso:std:iso:3166 CH}\">Switzerland</span></li></ul></td></tr></table></div>"
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
            "value" : "80756098765432100000"
          }
        ],
        "name" : [
          {
            "text" : "Fabienne Madeleine Babyglück",
            "family" : "Babyglück",
            "given" : ["Fabienne", "Madeleine"]
          }
        ],
        "telecom" : [
          {
            "system" : "email",
            "value" : "fabienne.babyglueck@example.com"
          },
          {
            "system" : "phone",
            "value" : "+41 66 666 66 66",
            "use" : "home"
          },
          {
            "system" : "phone",
            "value" : "+41 79 987 65 43",
            "use" : "mobile"
          },
          {
            "system" : "phone",
            "value" : "+41 43 434 34 34",
            "use" : "work"
          }
        ],
        "gender" : "female",
        "birthDate" : "1999-05-10",
        "address" : [
          {
            "line" : ["Mustergasse 1"],
            "city" : "Zürich",
            "postalCode" : "8000",
            "country" : "Schweiz"
          }
        ],
        "contact" : [
          {
            "relationship" : [
              {
                "coding" : [
                  {
                    "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
                    "code" : "GUARD",
                    "display" : "guardian"
                  }
                ]
              }
            ],
            "name" : {
              "family" : "Beistand",
              "given" : ["Marius"]
            },
            "telecom" : [
              {
                "system" : "email",
                "value" : "marius.beistand@example.com"
              },
              {
                "system" : "phone",
                "value" : "+41 99 999 99 99",
                "use" : "home"
              },
              {
                "system" : "phone",
                "value" : "+41 79 777 77 77",
                "use" : "mobile"
              },
              {
                "system" : "phone",
                "value" : "+41 88 888 88 88",
                "use" : "work"
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
              "reference" : "urn:uuid:67d0e290-21b9-4255-9182-5fe9f21cdbb4",
              "display" : "RelatedPerson Fabienne Babyglück"
            },
            "type" : "seealso"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:67d0e290-21b9-4255-9182-5fe9f21cdbb4",
      "resource" : {
        "resourceType" : "RelatedPerson",
        "id" : "67d0e290-21b9-4255-9182-5fe9f21cdbb4",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"RelatedPerson_67d0e290-21b9-4255-9182-5fe9f21cdbb4\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RelatedPerson 67d0e290-21b9-4255-9182-5fe9f21cdbb4</b></p><a name=\"67d0e290-21b9-4255-9182-5fe9f21cdbb4\"> </a><a name=\"hc67d0e290-21b9-4255-9182-5fe9f21cdbb4\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>patient</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e\">Kind</a></p><p><b>relationship</b>: <span title=\"Codes:{http://snomed.info/sct 65656005}\">Natural mother (person)</span></p></div>"
        },
        "patient" : {
          "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
          "display" : "Kind"
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
      "fullUrl" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "111d5e66-f17e-4369-90c6-9382e566040e",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Patient_111d5e66-f17e-4369-90c6-9382e566040e\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient 111d5e66-f17e-4369-90c6-9382e566040e</b></p><a name=\"111d5e66-f17e-4369-90c6-9382e566040e\"> </a><a name=\"hc111d5e66-f17e-4369-90c6-9382e566040e\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Anonymous Patient (no stated gender), DoB Unknown ( Patient internal identifier: A)</p><hr/></div>"
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
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "89029102-999c-4b69-a836-e4dbfbd55527",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"PractitionerRole_89029102-999c-4b69-a836-e4dbfbd55527\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole 89029102-999c-4b69-a836-e4dbfbd55527</b></p><a name=\"89029102-999c-4b69-a836-e4dbfbd55527\"> </a><a name=\"hc89029102-999c-4b69-a836-e4dbfbd55527\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>practitioner</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-a61d6a0b-ee42-443e-92e5-167d2e42f137\">Tanja Allesgut</a></p><p><b>organization</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-fbe019f1-6574-40be-940f-d03da0c743db\">Geburtsklinik</a></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 309343006}\">Arzt/Ärztin</span></p><p><b>specialty</b>: <span title=\"Codes:{urn:oid:2.16.756.5.30.1.127.3.5 1003}\">Gynäkologie und Geburtshilfe</span></p></div>"
        },
        "practitioner" : {
          "reference" : "urn:uuid:a61d6a0b-ee42-443e-92e5-167d2e42f137",
          "display" : "Tanja Allesgut"
        },
        "organization" : {
          "reference" : "urn:uuid:fbe019f1-6574-40be-940f-d03da0c743db",
          "display" : "Geburtsklinik"
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
      "fullUrl" : "urn:uuid:a61d6a0b-ee42-443e-92e5-167d2e42f137",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "a61d6a0b-ee42-443e-92e5-167d2e42f137",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Practitioner_a61d6a0b-ee42-443e-92e5-167d2e42f137\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner a61d6a0b-ee42-443e-92e5-167d2e42f137</b></p><a name=\"a61d6a0b-ee42-443e-92e5-167d2e42f137\"> </a><a name=\"hca61d6a0b-ee42-443e-92e5-167d2e42f137\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601002322553</p><p><b>name</b>: Tanja Allesgut </p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601002322553"
          }
        ],
        "name" : [
          {
            "family" : "Allesgut",
            "given" : ["Tanja"],
            "prefix" : ["Dr. med."]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:fbe019f1-6574-40be-940f-d03da0c743db",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "fbe019f1-6574-40be-940f-d03da0c743db",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Organization_fbe019f1-6574-40be-940f-d03da0c743db\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization fbe019f1-6574-40be-940f-d03da0c743db</b></p><a name=\"fbe019f1-6574-40be-940f-d03da0c743db\"> </a><a name=\"hcfbe019f1-6574-40be-940f-d03da0c743db\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>name</b>: Geburtsklinik 'Willkommen auf der Welt'</p><p><b>telecom</b>: <a href=\"mailto:geburtsklinik@example.com\">geburtsklinik@example.com</a>, <a href=\"tel:+41795555555\">+41 79 555 55 55</a>, <a href=\"tel:+41555555555\">+41 55 555 55 55</a></p><p><b>address</b>: Klinikstrasse 1 Musterhausen 8888 Schweiz </p></div>"
        },
        "name" : "Geburtsklinik 'Willkommen auf der Welt'",
        "telecom" : [
          {
            "system" : "email",
            "value" : "geburtsklinik@example.com"
          },
          {
            "system" : "phone",
            "value" : "+41 79 555 55 55",
            "use" : "mobile"
          },
          {
            "system" : "phone",
            "value" : "+41 55 555 55 55",
            "use" : "work"
          }
        ],
        "address" : [
          {
            "line" : ["Klinikstrasse 1"],
            "city" : "Musterhausen",
            "postalCode" : "8888",
            "country" : "Schweiz"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:e1b736e3-10bb-41aa-8d17-c7ba28895880",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "e1b736e3-10bb-41aa-8d17-c7ba28895880",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"PractitionerRole_e1b736e3-10bb-41aa-8d17-c7ba28895880\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole e1b736e3-10bb-41aa-8d17-c7ba28895880</b></p><a name=\"e1b736e3-10bb-41aa-8d17-c7ba28895880\"> </a><a name=\"hce1b736e3-10bb-41aa-8d17-c7ba28895880\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>practitioner</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-c314ae56-7edb-4ef9-b38a-216c9a979374\">Ruth Ohazwei</a></p><p><b>organization</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-fbe019f1-6574-40be-940f-d03da0c743db\">Geburtsklinik</a></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 309453006}\">Registrierte Hebamme</span></p></div>"
        },
        "practitioner" : {
          "reference" : "urn:uuid:c314ae56-7edb-4ef9-b38a-216c9a979374",
          "display" : "Ruth Ohazwei"
        },
        "organization" : {
          "reference" : "urn:uuid:fbe019f1-6574-40be-940f-d03da0c743db",
          "display" : "Geburtsklinik"
        },
        "code" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "309453006",
                "display" : "Registrierte Hebamme"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:c314ae56-7edb-4ef9-b38a-216c9a979374",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "c314ae56-7edb-4ef9-b38a-216c9a979374",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Practitioner_c314ae56-7edb-4ef9-b38a-216c9a979374\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner c314ae56-7edb-4ef9-b38a-216c9a979374</b></p><a name=\"c314ae56-7edb-4ef9-b38a-216c9a979374\"> </a><a name=\"hcc314ae56-7edb-4ef9-b38a-216c9a979374\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000234322</p><p><b>name</b>: Ruth Ohazwei </p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000234322"
          }
        ],
        "name" : [
          {
            "family" : "Ohazwei",
            "given" : ["Ruth"]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:b9145a94-ea12-479b-a031-b07d4ac9f297",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "b9145a94-ea12-479b-a031-b07d4ac9f297",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_b9145a94-ea12-479b-a031-b07d4ac9f297\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation b9145a94-ea12-479b-a031-b07d4ac9f297</b></p><a name=\"b9145a94-ea12-479b-a031-b07d4ac9f297\"> </a><a name=\"hcb9145a94-ea12-479b-a031-b07d4ac9f297\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category laboratory}\">Laboratory</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 14771-0}\">Fasting glucose [Moles/volume] in Serum or Plasma</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: 3.9 millimole per liter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemmol/L = 'mmol/L')</span></p><p><b>interpretation</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation L}\">Low</span></p></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueQuantity" : {
          "value" : 3.9,
          "unit" : "millimole per liter",
          "system" : "http://unitsofmeasure.org",
          "code" : "mmol/L"
        },
        "interpretation" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
                "code" : "L",
                "display" : "Low"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
      "resource" : {
        "resourceType" : "Encounter",
        "id" : "1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Encounter_1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Encounter 1ba6df42-ae1a-4b4a-886f-33d6b2223b1f</b></p><a name=\"1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\"> </a><a name=\"hc1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Finished</p><p><b>class</b>: <a href=\"http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-IMP\">ActCode: IMP</a> (inpatient encounter)</p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><h3>Participants</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Individual</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></td></tr></table><p><b>period</b>: 2025-03-27 --&gt; (ongoing)</p></div>"
        },
        "status" : "finished",
        "class" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "IMP",
          "display" : "inpatient encounter"
        },
        "subject" : {
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "participant" : [
          {
            "individual" : {
              "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
              "display" : "Tanja Allesgut @ Geburtsklinik"
            }
          }
        ],
        "period" : {
          "start" : "2025-03-27"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
      "resource" : {
        "resourceType" : "Encounter",
        "id" : "8e89c502-964f-4234-9728-540d881b0380",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Encounter_8e89c502-964f-4234-9728-540d881b0380\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Encounter 8e89c502-964f-4234-9728-540d881b0380</b></p><a name=\"8e89c502-964f-4234-9728-540d881b0380\"> </a><a name=\"hc8e89c502-964f-4234-9728-540d881b0380\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Finished</p><p><b>class</b>: <a href=\"http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB\">ActCode: AMB</a> (ambulatory)</p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><h3>Participants</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Individual</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></td></tr></table><p><b>period</b>: 2025-03-26 --&gt; 2025-03-26</p></div>"
        },
        "status" : "finished",
        "class" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "AMB",
          "display" : "ambulatory"
        },
        "subject" : {
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "participant" : [
          {
            "individual" : {
              "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
              "display" : "Tanja Allesgut @ Geburtsklinik"
            }
          }
        ],
        "period" : {
          "start" : "2025-03-26",
          "end" : "2025-03-26"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:833fd8f2-b75f-4dba-990f-6c46aa468d51",
      "resource" : {
        "resourceType" : "Encounter",
        "id" : "833fd8f2-b75f-4dba-990f-6c46aa468d51",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Encounter_833fd8f2-b75f-4dba-990f-6c46aa468d51\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Encounter 833fd8f2-b75f-4dba-990f-6c46aa468d51</b></p><a name=\"833fd8f2-b75f-4dba-990f-6c46aa468d51\"> </a><a name=\"hc833fd8f2-b75f-4dba-990f-6c46aa468d51\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Finished</p><p><b>class</b>: <a href=\"http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-IMP\">ActCode: IMP</a> (inpatient encounter)</p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e\">Kind</a></p><h3>Participants</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Individual</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></td></tr></table><p><b>period</b>: 2025-03-27 --&gt; (ongoing)</p><p><b>partOf</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p></div>"
        },
        "status" : "finished",
        "class" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "IMP",
          "display" : "inpatient encounter"
        },
        "subject" : {
          "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
          "display" : "Kind"
        },
        "participant" : [
          {
            "individual" : {
              "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
              "display" : "Tanja Allesgut @ Geburtsklinik"
            }
          }
        ],
        "period" : {
          "start" : "2025-03-27"
        },
        "partOf" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:22aeb067-85f9-4b3b-9301-161604005206",
      "resource" : {
        "resourceType" : "Encounter",
        "id" : "22aeb067-85f9-4b3b-9301-161604005206",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Encounter_22aeb067-85f9-4b3b-9301-161604005206\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Encounter 22aeb067-85f9-4b3b-9301-161604005206</b></p><a name=\"22aeb067-85f9-4b3b-9301-161604005206\"> </a><a name=\"hc22aeb067-85f9-4b3b-9301-161604005206\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Finished</p><p><b>class</b>: <a href=\"http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB\">ActCode: AMB</a> (ambulatory)</p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e\">Kind</a></p><h3>Participants</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Individual</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></td></tr></table><p><b>period</b>: 2025-03-26 --&gt; 2025-03-26</p><p><b>partOf</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-8e89c502-964f-4234-9728-540d881b0380\">Untersuchung Mutter, 26.03.2025</a></p></div>"
        },
        "status" : "finished",
        "class" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "AMB",
          "display" : "ambulatory"
        },
        "subject" : {
          "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
          "display" : "Kind"
        },
        "participant" : [
          {
            "individual" : {
              "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
              "display" : "Tanja Allesgut @ Geburtsklinik"
            }
          }
        ],
        "period" : {
          "start" : "2025-03-26",
          "end" : "2025-03-26"
        },
        "partOf" : {
          "reference" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
          "display" : "Untersuchung Mutter, 26.03.2025"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:84869994-4348-4ad3-95ee-d9b0faf75dba",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "84869994-4348-4ad3-95ee-d9b0faf75dba",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_84869994-4348-4ad3-95ee-d9b0faf75dba\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 84869994-4348-4ad3-95ee-d9b0faf75dba</b></p><a name=\"84869994-4348-4ad3-95ee-d9b0faf75dba\"> </a><a name=\"hc84869994-4348-4ad3-95ee-d9b0faf75dba\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 49052-4}\">Gestational age in days</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: 224 day<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  coded = 'd')</span></p></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueQuantity" : {
          "value" : 224,
          "unit" : "day",
          "system" : "http://unitsofmeasure.org",
          "code" : "d"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:2f167f2f-44f7-49e3-a970-d7f7a6573cd3",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "2f167f2f-44f7-49e3-a970-d7f7a6573cd3",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_2f167f2f-44f7-49e3-a970-d7f7a6573cd3\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 2f167f2f-44f7-49e3-a970-d7f7a6573cd3</b></p><a name=\"2f167f2f-44f7-49e3-a970-d7f7a6573cd3\"> </a><a name=\"hc2f167f2f-44f7-49e3-a970-d7f7a6573cd3\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 49052-4}\">Gestational age in days</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-8e89c502-964f-4234-9728-540d881b0380\">Untersuchung Mutter, 26.03.2025</a></p><p><b>effective</b>: 2025-03-26</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: 223 day<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  coded = 'd')</span></p></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
          "display" : "Untersuchung Mutter, 26.03.2025"
        },
        "effectiveDateTime" : "2025-03-26",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueQuantity" : {
          "value" : 223,
          "unit" : "day",
          "system" : "http://unitsofmeasure.org",
          "code" : "d"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:e1c73669-f935-47d1-9dcd-fab76a38bdb7",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "e1c73669-f935-47d1-9dcd-fab76a38bdb7",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_e1c73669-f935-47d1-9dcd-fab76a38bdb7\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation e1c73669-f935-47d1-9dcd-fab76a38bdb7</b></p><a name=\"e1c73669-f935-47d1-9dcd-fab76a38bdb7\"> </a><a name=\"hce1c73669-f935-47d1-9dcd-fab76a38bdb7\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category vital-signs}\">Vital Signs</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 29463-7}\">Body weight</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: 65 kilogram<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codekg = 'kg')</span></p></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueQuantity" : {
          "value" : 65,
          "unit" : "kilogram",
          "system" : "http://unitsofmeasure.org",
          "code" : "kg"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:f339e056-53d6-4247-9226-5339123fbd14",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "f339e056-53d6-4247-9226-5339123fbd14",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_f339e056-53d6-4247-9226-5339123fbd14\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation f339e056-53d6-4247-9226-5339123fbd14</b></p><a name=\"f339e056-53d6-4247-9226-5339123fbd14\"> </a><a name=\"hcf339e056-53d6-4247-9226-5339123fbd14\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category vital-signs}\">Vital Signs</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 29463-7}\">Body weight</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-8e89c502-964f-4234-9728-540d881b0380\">Untersuchung Mutter, 26.03.2025</a></p><p><b>effective</b>: 2025-03-26</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: 65.1 kilogram<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codekg = 'kg')</span></p></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
          "display" : "Untersuchung Mutter, 26.03.2025"
        },
        "effectiveDateTime" : "2025-03-26",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueQuantity" : {
          "value" : 65.1,
          "unit" : "kilogram",
          "system" : "http://unitsofmeasure.org",
          "code" : "kg"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:4268bd90-eff8-41f4-a7b4-2178dac0e470",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "4268bd90-eff8-41f4-a7b4-2178dac0e470",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_4268bd90-eff8-41f4-a7b4-2178dac0e470\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 4268bd90-eff8-41f4-a7b4-2178dac0e470</b></p><a name=\"4268bd90-eff8-41f4-a7b4-2178dac0e470\"> </a><a name=\"hc4268bd90-eff8-41f4-a7b4-2178dac0e470\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category vital-signs}\">Vital Signs</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 85354-9}\">Blood pressure panel with all children optional</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 8480-6}\">Systolic blood pressure</span></p><p><b>value</b>: 160 millimeter of mercury<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemm[Hg] = 'mm[Hg]')</span></p></blockquote><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 8462-4}\">Diastolic blood pressure</span></p><p><b>value</b>: 60 millimeter of mercury<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemm[Hg] = 'mm[Hg]')</span></p></blockquote></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
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
              "value" : 60,
              "unit" : "millimeter of mercury",
              "system" : "http://unitsofmeasure.org",
              "code" : "mm[Hg]"
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:e949f912-fc27-4849-8632-09caad9fe897",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "e949f912-fc27-4849-8632-09caad9fe897",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_e949f912-fc27-4849-8632-09caad9fe897\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation e949f912-fc27-4849-8632-09caad9fe897</b></p><a name=\"e949f912-fc27-4849-8632-09caad9fe897\"> </a><a name=\"hce949f912-fc27-4849-8632-09caad9fe897\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category vital-signs}\">Vital Signs</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 85354-9}\">Blood pressure panel with all children optional</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-8e89c502-964f-4234-9728-540d881b0380\">Untersuchung Mutter, 26.03.2025</a></p><p><b>effective</b>: 2025-03-26</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 8480-6}\">Systolic blood pressure</span></p><p><b>value</b>: 122 millimeter of mercury<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemm[Hg] = 'mm[Hg]')</span></p></blockquote><blockquote><p><b>component</b></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 8462-4}\">Diastolic blood pressure</span></p><p><b>value</b>: 83 millimeter of mercury<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemm[Hg] = 'mm[Hg]')</span></p></blockquote></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
          "display" : "Untersuchung Mutter, 26.03.2025"
        },
        "effectiveDateTime" : "2025-03-26",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
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
              "value" : 122,
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
              "value" : 83,
              "unit" : "millimeter of mercury",
              "system" : "http://unitsofmeasure.org",
              "code" : "mm[Hg]"
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:2db81543-7bf1-4965-a75e-00400c62e78b",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "2db81543-7bf1-4965-a75e-00400c62e78b",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_2db81543-7bf1-4965-a75e-00400c62e78b\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 2db81543-7bf1-4965-a75e-00400c62e78b</b></p><a name=\"2db81543-7bf1-4965-a75e-00400c62e78b\"> </a><a name=\"hc2db81543-7bf1-4965-a75e-00400c62e78b\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 417597005}\">Urine dipstick test finding (finding)</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: bland</p></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueString" : "bland"
      }
    },
    {
      "fullUrl" : "urn:uuid:6eafd07b-c40a-4864-874c-cfe2d5b222ed",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "6eafd07b-c40a-4864-874c-cfe2d5b222ed",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_6eafd07b-c40a-4864-874c-cfe2d5b222ed\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 6eafd07b-c40a-4864-874c-cfe2d5b222ed</b></p><a name=\"6eafd07b-c40a-4864-874c-cfe2d5b222ed\"> </a><a name=\"hc6eafd07b-c40a-4864-874c-cfe2d5b222ed\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364265003}\">Height of gravid uterus (observable entity)</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: Rb/2</p></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueString" : "Rb/2"
      }
    },
    {
      "fullUrl" : "urn:uuid:c9bba019-9ed9-4574-84e2-f7d302e8f5d0",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "c9bba019-9ed9-4574-84e2-f7d302e8f5d0",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_c9bba019-9ed9-4574-84e2-f7d302e8f5d0\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation c9bba019-9ed9-4574-84e2-f7d302e8f5d0</b></p><a name=\"c9bba019-9ed9-4574-84e2-f7d302e8f5d0\"> </a><a name=\"hcc9bba019-9ed9-4574-84e2-f7d302e8f5d0\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364230003}\">Vagina feature (observable entity)</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: MM 5 cm</p></div>"
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
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueString" : "MM 5 cm"
      }
    },
    {
      "fullUrl" : "urn:uuid:3e120206-7aa2-4ced-82c3-3704868e023f",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "3e120206-7aa2-4ced-82c3-3704868e023f",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_3e120206-7aa2-4ced-82c3-3704868e023f\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 3e120206-7aa2-4ced-82c3-3704868e023f</b></p><a name=\"3e120206-7aa2-4ced-82c3-3704868e023f\"> </a><a name=\"hc3e120206-7aa2-4ced-82c3-3704868e023f\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 249040004}\">Fetal movement activity (observable entity)</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e\">Kind</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-833fd8f2-b75f-4dba-990f-6c46aa468d51\">Untersuchung Kind, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: schwach</p></div>"
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
          "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
          "display" : "Kind"
        },
        "encounter" : {
          "reference" : "urn:uuid:833fd8f2-b75f-4dba-990f-6c46aa468d51",
          "display" : "Untersuchung Kind, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueString" : "schwach"
      }
    },
    {
      "fullUrl" : "urn:uuid:d0b53779-fde0-4780-9ff4-9ba2a4cf9393",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "d0b53779-fde0-4780-9ff4-9ba2a4cf9393",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_d0b53779-fde0-4780-9ff4-9ba2a4cf9393\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation d0b53779-fde0-4780-9ff4-9ba2a4cf9393</b></p><a name=\"d0b53779-fde0-4780-9ff4-9ba2a4cf9393\"> </a><a name=\"hcd0b53779-fde0-4780-9ff4-9ba2a4cf9393\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364620002}\">Fetal heart feature (observable entity)</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e\">Kind</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-833fd8f2-b75f-4dba-990f-6c46aa468d51\">Untersuchung Kind, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: 110 /min</p></div>"
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
          "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
          "display" : "Kind"
        },
        "encounter" : {
          "reference" : "urn:uuid:833fd8f2-b75f-4dba-990f-6c46aa468d51",
          "display" : "Untersuchung Kind, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueString" : "110 /min"
      }
    },
    {
      "fullUrl" : "urn:uuid:a5c14df0-3dca-4530-a22a-072af14178b1",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "a5c14df0-3dca-4530-a22a-072af14178b1",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_a5c14df0-3dca-4530-a22a-072af14178b1\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation a5c14df0-3dca-4530-a22a-072af14178b1</b></p><a name=\"a5c14df0-3dca-4530-a22a-072af14178b1\"> </a><a name=\"hca5c14df0-3dca-4530-a22a-072af14178b1\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364607000}\">Position of fetus (observable entity)</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e\">Kind</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-833fd8f2-b75f-4dba-990f-6c46aa468d51\">Untersuchung Kind, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: <span title=\"Codes:{http://snomed.info/sct 6096002}\">Steisslage</span></p></div>"
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
          "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
          "display" : "Kind"
        },
        "encounter" : {
          "reference" : "urn:uuid:833fd8f2-b75f-4dba-990f-6c46aa468d51",
          "display" : "Untersuchung Kind, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "6096002",
              "display" : "Breech presentation (finding)"
            }
          ],
          "text" : "Steisslage"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:4a907770-6665-4fb4-b186-afd0ddf48742",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "4a907770-6665-4fb4-b186-afd0ddf48742",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_4a907770-6665-4fb4-b186-afd0ddf48742\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 4a907770-6665-4fb4-b186-afd0ddf48742</b></p><a name=\"4a907770-6665-4fb4-b186-afd0ddf48742\"> </a><a name=\"hc4a907770-6665-4fb4-b186-afd0ddf48742\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 364607000}\">Position of fetus (observable entity)</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e\">Kind</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-8e89c502-964f-4234-9728-540d881b0380\">Untersuchung Mutter, 26.03.2025</a></p><p><b>effective</b>: 2025-03-26</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: <span title=\"Codes:{http://snomed.info/sct 6096002}\">Steisslage</span></p></div>"
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
          "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
          "display" : "Kind"
        },
        "encounter" : {
          "reference" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
          "display" : "Untersuchung Mutter, 26.03.2025"
        },
        "effectiveDateTime" : "2025-03-26",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "6096002",
              "display" : "Breech presentation (finding)"
            }
          ],
          "text" : "Steisslage"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:4b9ca365-383e-41c8-9bac-b3c79aea1c7e",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "4b9ca365-383e-41c8-9bac-b3c79aea1c7e",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_4b9ca365-383e-41c8-9bac-b3c79aea1c7e\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 4b9ca365-383e-41c8-9bac-b3c79aea1c7e</b></p><a name=\"4b9ca365-383e-41c8-9bac-b3c79aea1c7e\"> </a><a name=\"hc4b9ca365-383e-41c8-9bac-b3c79aea1c7e\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 72516-8}\">Glucose [Moles/volume] in Blood by Automated test strip</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: 3.9 millimole per liter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemmol/L = 'mmol/L')</span></p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "72516-8",
              "display" : "Glucose [Moles/volume] in Blood by Automated test strip"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueQuantity" : {
          "value" : 3.9,
          "unit" : "millimole per liter",
          "system" : "http://unitsofmeasure.org",
          "code" : "mmol/L"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:bbd6f1bc-1d87-4c90-a313-98bea06c3dfb",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "bbd6f1bc-1d87-4c90-a313-98bea06c3dfb",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_bbd6f1bc-1d87-4c90-a313-98bea06c3dfb\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation bbd6f1bc-1d87-4c90-a313-98bea06c3dfb</b></p><a name=\"bbd6f1bc-1d87-4c90-a313-98bea06c3dfb\"> </a><a name=\"hcbbd6f1bc-1d87-4c90-a313-98bea06c3dfb\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 72516-8}\">Glucose [Moles/volume] in Blood by Automated test strip</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-8e89c502-964f-4234-9728-540d881b0380\">Untersuchung Mutter, 26.03.2025</a></p><p><b>effective</b>: 2025-03-26</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: 4.7 millimole per liter<span style=\"background: LightGoldenRodYellow\"> (Details: UCUM  codemmol/L = 'mmol/L')</span></p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "72516-8",
              "display" : "Glucose [Moles/volume] in Blood by Automated test strip"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
          "display" : "Untersuchung Mutter, 26.03.2025"
        },
        "effectiveDateTime" : "2025-03-26",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueQuantity" : {
          "value" : 4.7,
          "unit" : "millimole per liter",
          "system" : "http://unitsofmeasure.org",
          "code" : "mmol/L"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:1ce882f2-953f-428e-a90b-a55271020fca",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "1ce882f2-953f-428e-a90b-a55271020fca",
        "language" : "de-CH",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Observation_1ce882f2-953f-428e-a90b-a55271020fca\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation 1ce882f2-953f-428e-a90b-a55271020fca</b></p><a name=\"1ce882f2-953f-428e-a90b-a55271020fca\"> </a><a name=\"hc1ce882f2-953f-428e-a90b-a55271020fca\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 70387-6}\">I am bothered by reflux or heartburn in the past 7 days [FACIT]</span></p><p><b>subject</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd\">Fabienne Babyglück</a></p><p><b>encounter</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f\">Untersuchung Mutter, 27.03.2025</a></p><p><b>effective</b>: 2025-03-27</p><p><b>performer</b>: <a href=\"Bundle-UC2-Document.html#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527\">Tanja Allesgut @ Geburtsklinik</a></p><p><b>value</b>: true</p></div>"
        },
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "70387-6",
              "display" : "I am bothered by reflux or heartburn in the past 7 days [FACIT]"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
          "display" : "Fabienne Babyglück"
        },
        "encounter" : {
          "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
          "display" : "Untersuchung Mutter, 27.03.2025"
        },
        "effectiveDateTime" : "2025-03-27",
        "performer" : [
          {
            "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
            "display" : "Tanja Allesgut @ Geburtsklinik"
          }
        ],
        "valueBoolean" : true
      }
    }
  ]
}

```
